<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EventRequest;
use Carbon\Carbon;
use App\Models\Feature;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Support\Facades\Http;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')
            ->where('members_only', 0)
            ->get(); // Paginate results

        return view('frontend.events.index')->with('events', $events);
    }

    public function eventDetail(Request $request, string $id)
    {
        try {
            $event = Event::findOrFail($id);
            $user = Auth::user();
            return view('frontend.events.event-detail', [
                'event' => $event,
                'user' => $user,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'Event not found.');
        }
    }

    public function list(Request $request)
    {
        $this->authorizeAdmin();
    
        $query = Event::select(
            'id', 'title', 'details', 'image', 'price_member', 'price_non_member', 
            'is_active', 'members_only', 'date', 'start_time', 'end_time', 'address', 'country', 
            'state', 'city', 'pincode', 'created_by', 'updated_by'
        );
    
        // Filter by status (active or inactive)
        if ($request->has('status')) {
            $status = $request->input('status') == 'active' ? 1 : 0;
            $query->where('is_active', $status);
        }
    
        // Filter by date range
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('date', [$request->input('start_date'), $request->input('end_date')]);
        }
    
        // Paginate results
        $events = $query->paginate(10);
    
        return view('frontend.events.list', [
            'events' => $events,
            'status' => $request->input('status', 'active'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date')
        ]);
    }
    


    public function create()
    {
        $this->authorizeAdmin();
        $features = Feature::all();
        
        return view('frontend.events.add', compact('features'));
    }

    public function store(EventRequest $request)
    {
        $request->merge(['is_active' => $request->has('is_active') ? 1 : 0]);
        $request->merge(['members_only' => $request->has('members_only') ? 1 : 0]);

        try {
            // Image upload
            $file_name = $this->uploadImage($request);  

            // Create Event
            $event = new Event();
            $event->title = $request->title;
            $event->details = $this->purifyHtml($request['details']);
            $event->image = $file_name;
            $event->price_member = $request->price_member;
            $event->price_non_member = $request->price_non_member;
            $event->is_active = $request->is_active;
            $event->members_only = $request->members_only;
            $event->date = $request->date;
            $event->start_time = $request->start_time; 
            $event->end_time = $request->end_time; 
            $event->address = $request->address;
            $event->country = $request->country;
            $event->state = $request->state;
            $event->city = $request->city;
            $event->pincode = $request->pincode;

            $event->save();

            // Create product for members in WaveApp
            $this->createProduct($event, 'member');

            // Create product for non-members in WaveApp, only if it's not members-only event
            if (!$event->members_only) {
                $this->createProduct($event, 'non_member');
            }

            if ($request->filled('features')) {
                $this->syncFeatures($event, $request['features']);
            }

            $users = \App\Models\User::role('user')->get(); // Get all users with the "admin" role

            foreach ($users as $user) {
                \Mail::to($user->email)->send(new \App\Mail\UserEventNotification($event));
            }

            

            // Redirect on success
        $features = Feature::all();
        return redirect()->route('events.list')->with('features',$features)->with('success', 'Event created successfully.');
        } catch (\Throwable $th) {
            // Handle error\
            return back()->with('error', 'Failed to create event.');
        }
    }
    private function syncFeatures(Event $event, array $features)
    {
        if (!empty($features)) {
            $featureIds = [];
            foreach ($features as $feature) {
                $featureRecord = Feature::firstOrCreate(['feature' => $feature]);
                $featureIds[] = $featureRecord->id;
            }
            $event->features()->sync($featureIds);
        }

    }

    public function show(string $id)
    {
        $this->authorizeAdmin();
        
        try {
            $event = Event::findOrFail($id);
            $features = Feature::all();

            return view('frontend.events.view')
                ->with('event', $event)->with('features',$features);


        } catch (ModelNotFoundException $e) {
            return redirect()->route('events.index')->with('error', 'User not found.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorizeAdmin();
        
        try {
            $event = Event::findOrFail($id);
             $features = Feature::all();

            return view('frontend.events.edit')->with('event', $event)->with('features',$features);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('events.index')->with('error', 'Event not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, $id)
    {
        $this->authorizeAdmin();
        
        $request->merge(['is_active' => $request->has('is_active') ? 1 : 0]);
        $request->merge(['members_only' => $request->has('members_only') ? 1 : 0]);
        
        
        DB::beginTransaction();
        
        try {
            
            // Retrieve the existing event by ID
            $event = Event::findOrFail($id);

            $event->image = $this->uploadImage($request);
    
            // Update the event fields
            $event->title = $request->title;
            $event->details = $this->purifyHtml($request['details']);
            $event->price_member = $request->price_member;
            $event->price_non_member = $request->price_non_member;
            $event->is_active = $request->is_active;
            $event->members_only = $request->members_only;
            $event->date = $request->date;
            $event->start_time = $request->start_time;
            $event->end_time = $request->end_time;
            $event->address = $request->address;
            $event->country = $request->country;
            $event->state = $request->state;
            $event->city = $request->city;
            $event->pincode = $request->pincode;
    
            // Save the updated event
            $event->save();
            if ($request->filled('features')) {
                $this->syncFeatures($event, $request['features']);
            }
    
            // Commit the transaction
            DB::commit();
    
            // Redirect on success
            return redirect()->route('events.list')->with('success', 'Event updated successfully.');
        } catch (\Throwable $th) {
            
            // Rollback the transaction in case of an error
            DB::rollBack();
            return back()->with('error', 'Failed to update event.');
        }
    }
    
    
    
    

    

    public function destroy(string $id)
    {
        $this->authorizeAdmin();
        
        DB::beginTransaction();
        try {
            $event = Event::findOrFail($id);
            $this->deleteExistingImage($event->image); 
            $event->delete();

            DB::commit();
            return redirect()->route('events.list')->with('success', 'Event deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete events.');
        }
    }

    public function membersOnly(){
        $events = Event::where('is_active', 1)->where('members_only', 1)->paginate(10);
        return view('frontend.events.members-only', ['events' => $events]);
    }

    public function bookEvent(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $user = Auth::user();
    
        // Check if the user has already booked
        if (Booking::where('event_id', $eventId)->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You have already booked this event.');
        }
    
        // WaveApps API details
        $waveApiKey = env('WAVEAPP_ACCESS_TOKEN');
        $graphqlUrl = 'https://gql.waveapps.com/graphql/public';
    
        // Step 1: Check if the customer exists in WaveApps
        $customerQuery = '
            query($businessId: ID!, $customerEmail: String!) {
                business(id: $businessId) {
                    customers(email: $customerEmail) {
                        edges {
                            node {
                                id
                            }
                        }
                    }
                }
            }
        ';
    
        $variables = [
            "businessId" => env('WAVEAPP_BUSINESS_ID'),
            "customerEmail" => $user->email
        ];
    
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $waveApiKey,
                'Content-Type' => 'application/json',
            ])->post($graphqlUrl, [
                'query' => $customerQuery,
                'variables' => $variables
            ]);
        
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch customer data from WaveApps.');
            }
        
            $customerData = $response->json();
        } catch (\Exception $e) {
            \Log::error('WaveApps API Error: ' . $e->getMessage());
            return back()->with('error', 'Unable to fetch customer details. Please try again.');
        }
        
        $customerId = $customerData['data']['business']['customers']['edges'][0]['node']['id'] ?? null;
    
        // Step 2: Create a new customer in WaveApps if not found
        if (!$customerId) {
            $customerMutation = '
                mutation ($input: CustomerCreateInput!) {
                    customerCreate(input: $input) {
                        didSucceed
                        customer {
                            id
                        }
                        inputErrors {
                            message
                        }
                    }
                }
            ';
    
            $customerVariables = [
                "input" => [
                    "businessId" => env('WAVEAPP_BUSINESS_ID'),
                    "name" => $user->first_name ?? '',
                    "firstName" => $user->first_name ?? '',
                    "lastName" => $user->last_name ?? '',
                    "email" => $user->email,
                    "address" => [
                        "city" => "YourCity",
                        "postalCode" => "H0H 0H0",
                        "provinceCode" => "CA-NU",
                        "countryCode" => "CA"
                    ],
                    "currency" => "CAD"
                ]
            ];
            try {
        
                $customerCreateResponse = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $waveApiKey,
                    'Content-Type' => 'application/json',
                ])->post($graphqlUrl, [
                    'query' => $customerMutation,
                    'variables' => $customerVariables
                ]);

                if (!$customerCreateResponse->successful()) {
                    throw new \Exception('Failed to create customer data from WaveApps.');
                }
            
                $customerCreateData = $customerCreateResponse->json();
            } catch (\Exception $e) {
                \Log::error('WaveApps API Error: ' . $e->getMessage());
                return back()->with('error', 'Unable to fetch customer details. Please try again.');
            }
    
            
            if ($customerCreateData['data']['customerCreate']['didSucceed']) {
                $customerId = $customerCreateData['data']['customerCreate']['customer']['id'];
            } else {
                return redirect()->back()->with('error', 'Failed to create customer in WaveApps.');
            }
        }
    
        // Step 3: Create Invoice
        $invoiceQuery = '
            mutation ($input: InvoiceCreateInput!) {
                invoiceCreate(input: $input) {
                    didSucceed
                    invoice {
                        id
                        viewUrl
                    }
                    inputErrors {
                        message
                    }
                }
            }
        ';
    
        $invoiceVariables = [
            'input' => [
                'businessId' => env('WAVEAPP_BUSINESS_ID'),
                'customerId' => $customerId,
                'items' => [
                    [
                        'productId' => $event->wave_product_id,
                    ]
                ]
            ]
        ];
        try {
            $invoiceResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $waveApiKey,
                'Content-Type'  => 'application/json',
            ])->post($graphqlUrl, [
                'query' => $invoiceQuery,
                'variables' => $invoiceVariables,
            ]);

            if (!$invoiceResponse->successful()) {
                throw new \Exception('Failed to create invoice from WaveApps.');
            }
        
            $invoiceData = $invoiceResponse->json();

        } catch (\Exception $e) {
            \Log::error('WaveApps API Error: ' . $e->getMessage());
            return back()->with('error', 'Unable to create invoice. Please try again.');
        }

        if (!$invoiceData['data']['invoiceCreate']['didSucceed']) {
            return back()->with('error', 'Failed to create invoice.');
        }
    
        $invoiceId = $invoiceData['data']['invoiceCreate']['invoice']['id'];
        $invoiceUrl = $invoiceData['data']['invoiceCreate']['invoice']['viewUrl'];
    
        // Step 4: Approve Invoice
        $invoiceApproveQuery = '
            mutation ($input: InvoiceApproveInput!) {
                invoiceApprove(input: $input) {
                    didSucceed
                    inputErrors {
                        message
                    }
                }
            }
        ';
    
        $invoiceApproveVariables = [
            'input' => [
                'invoiceId' => $invoiceId
            ]
        ];
    
        try{
            $approveResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $waveApiKey,
                'Content-Type'  => 'application/json',
            ])->post($graphqlUrl, [
                'query'     => $invoiceApproveQuery,
                'variables' => $invoiceApproveVariables,
            ]);

            if (!$approveResponse->successful()) {
                throw new \Exception('Failed to approve invoice from WaveApps.');
            }
        
            $approveData = $approveResponse->json();
            
        } catch (\Exception $e) {
            \Log::error('WaveApps API Error: ' . $e->getMessage());
            return back()->with('error', 'Unable to approve invoice. Please try again.');
        }

        if (!$approveData['data']['invoiceApprove']['didSucceed']) {
            redirect()->back()->with('error', 'Failed to approve invoice.');
        }
    
        $invoiceSendQuery = '
        mutation ($input: InvoiceSendInput!) {
            invoiceSend(input: $input) {
                didSucceed
                inputErrors {
                    message
                    code
                    path
                }
            }
        }
    ';
    
    $invoiceSendVariables = [
        'input' => [
            'invoiceId' => $invoiceId,
            'to' => [$user->email],
            'message' => 'Thank you for booking the event. Please find your invoice attached.',
            'attachPDF' => true,
        ]
    ];
    
    try {
        $sendResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $waveApiKey,
            'Content-Type' => 'application/json',
        ])->post($graphqlUrl, [
            'query' => $invoiceSendQuery,
            'variables' => $invoiceSendVariables,
        ]);
    
        if (!$sendResponse->successful()) {
            throw new \Exception('Failed to send invoice email from WaveApps.');
        }
    
        $sendData = $sendResponse->json();
        } catch (\Exception $e) {
            \Log::error('WaveApps API Error: ' . $e->getMessage());
            return back()->with('error', 'Unable to send invoice email. Please try again.');
        }
        
        if (!$sendData['data']['invoiceSend']['didSucceed']) {
            return back()->with('error', 'Failed to send invoice email.');
        }

            // Step 5: Store Booking
            
        // Step 5: Store Booking
        $bookingId = 'SAREP-' . strtoupper(uniqid());
        $amount = $user->hasRole('member') ? $event->price_member : $event->price_non_member;
    
        $booking = Booking::create([
            'user_id' => $user->id,
            'event_id' => $eventId,
            'booking_id' => $bookingId,
            'amount' => $amount,
            'is_member' => $user->hasRole('member'),
        ]);
    
        // Step 6: Store Customer ID in User Table
        $user->update(['wave_customer_id' => $customerId]);
    

        // Step 7: Notify Admins & Users
        $admins = \App\Models\User::role('admin')->get();
        foreach ($admins as $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\AdminBookingNotification($booking));
        }
        \Mail::to($user->email)->send(new \App\Mail\UserBookingNotification($booking));
    
        return redirect()->route('booking-confirmation')->with('success', 'Event booked successfully! Your booking ID is ' . $bookingId);
    }
    

    public function bookingConfirmation()
    {

        return view('frontend.events.booking-confirmation');
    }
    
    public function attendeeList(String $eventId)
    {
        $event = Event::findOrFail($eventId);
        $user = Auth::user();
        $attendees = Booking::where('event_id', $eventId)->with('event')->with('user')->paginate(10);
        return view('frontend.events.attendee-list')->with('attendees', $attendees)->with('event', $event);
    }

    public function verifyBooking(Request $request, String $bookingId, String $userId)
    {

        // Fetch the booking for the specific user and booking ID
        $booking = Booking::where('booking_id', $bookingId)
            ->where('user_id', $userId)
            ->first();

            
        // Check if booking exists
        if (!$booking) {
            return back()->with('error', 'Booking not found or invalid user.');
        }

        // Only update if the booking hasn't been marked as attended
        // if (!$booking->is_attended) {
            $booking->update([
                'is_attended' => true
            ]);
        // }

        return back()->with('success', 'Booking verified successfully.');
    }

    public function pastEvents()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode')->where('is_active', false)->paginate(10); // Paginate results

        return view('frontend.events.past-event')->with('events', $events);
    }

    public function viewBooking()
    {
        $user = Auth::user();
        $attendees = Booking::where('user_id', $user->id)->with('event')->with('user')->paginate(10);
        return view('frontend.events.view-booking')->with('attendees', $attendees);
    }

    public function eventReminder(){

   
        // Get the current date + 2 days
        $reminderDate = Carbon::now('Asia/Kolkata')->addDays(2)->format('Y-m-d');
        $events = Event::where('date',$reminderDate)->get();
        
        foreach ($events as $event) {
            $bookings = Booking::where('event_id', $event->id)->get();
            foreach ($bookings as $booking) {
                $user = $booking->user;
                 if ($user) {
                     \Mail::to($user->email)->send(new \App\Mail\EventReminderNotification($booking));
                 } else {
                     \Log::warning("User not found for booking ID: {$booking->id}");
                 }
             }
        }
     
     
     }

     public function sendFeedbackRequest()
    {
        // Get the current date - 2 days (events that ended 2 days ago)
        $feedbackDate = Carbon::now('Asia/Kolkata')->subDays(2)->format('Y-m-d');
        
        // Retrieve events that ended 2 days ago
        $events = Event::where('date', $feedbackDate)->get();
        
        foreach ($events as $event) {
            // Get all bookings for the event
            $bookings = Booking::where('event_id', $event->id)->get();

            foreach ($bookings as $booking) {
                // Get the user associated with the booking
                $user = $booking->user;

                // Check if user exists
                if ($user) {
                    // Send feedback email to user
                    \Mail::to($user->email)->send(new \App\Mail\FeedbackFormNotification($booking));
                } else {
                    // Log if user is not found
                    \Log::warning("User not found for booking ID: {$booking->id}");
                }
            }
        }
    }

    private function uploadImage(Request $request, $existingImage = null)
    {
        if ($request->hasFile('image')) {
            $this->deleteExistingImage($existingImage);

            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/events/'), $fileName);

            return $fileName;
        }

        return $existingImage;
    }

    private function deleteExistingImage($image)
    {
        if ($image && file_exists(public_path('images/events/' . $image))) {
            unlink(public_path('images/events/' . $image));
        }
    }

    private function authorizeAdmin()
    {
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Access denied.');
        }
    }

    /**
     * Purify HTML content to prevent XSS attacks.
     */
    private function purifyHtml($html)
    {
        // Create a new HTML Purifier instance
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        // Purify the HTML content
        return $purifier->purify($html);
    }

    public function createProduct($event, $type)
    {
        $waveApiKey = env('WAVEAPP_ACCESS_TOKEN'); // Store API Key in .env
        $graphqlUrl = 'https://gql.waveapps.com/graphql/public';

        // Determine the price based on type (member or non-member)
        $price = $type === 'member' ? $event->price_member : $event->price_non_member;
        $name = $type === 'member' ? $event->title . ' - Member' : $event->title . ' - Non-Member';
        $description = $event->details;

        // Define mutation and variables
        $mutation = '
            mutation ($input: ProductCreateInput!) {
                productCreate(input: $input) {
                    didSucceed
                    inputErrors {
                        code
                        message
                        path
                    }
                    product {
                        id
                        name
                        description
                        unitPrice
                        incomeAccount {
                            id
                            name
                        }
                        expenseAccount {
                            id
                            name
                        }
                        isSold
                        isBought
                        isArchived
                        createdAt
                        modifiedAt
                    }
                }
            }
        ';

        $variables = [
            "input" => [
                "businessId" => env('WAVEAPP_BUSINESS_ID'), // Your Business ID
                "name" => $name, // Product name based on type (Member/Non-Member)
                "description" => strip_tags($description), // Use event details as the product description
                "unitPrice" => $price, // Dynamic price based on member/non-member
                "incomeAccountId" => env('WAVEAPP_INCOME_ACCOUNT_ID'), // Your Income Account ID
            ]
        ];

        // Send GraphQL request
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $waveApiKey,
            'Content-Type'  => 'application/json',
        ])->post($graphqlUrl, [
            'query' => $mutation,
            'variables' => $variables
        ]);

        $result = $response->json();

        if (isset($result['data']['productCreate']['didSucceed']) && $result['data']['productCreate']['didSucceed']) {
            return response()->json([
                'success' => true,
                'product' => $result['data']['productCreate']['product']
            ]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => $result
            ], 400);
        }
    }

}
