<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')->get(); // Paginate results

        return view('frontend.events.index')->with('events', $events);
    }

    public function eventDetail(Request $request, string $id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('frontend.events.event-detail')
                ->with('event', $event);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error', 'User not found.');
        }
    }

    public function list(Request $request)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
    
        $query = Event::select(
            'id', 'title', 'details', 'image', 'price_member', 'price_non_member', 
            'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 
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
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        return view('frontend.events.add');
    }

    public function store(Request $request)
    {

        // Ensure the checkbox is handled properly
        $request->merge(['is_active' => $request->has('is_active') ? 1 : 0]);

        // Validations
        $validator = \Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'details' => 'required|string|max:16777215',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price_member' => 'nullable|numeric',
            'price_non_member' => 'nullable|numeric',
            'is_active' => 'required|boolean',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'required|string|max:10|regex:/^\d{4,10}$/',
        ]);

        try {
            // Image upload
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/events'), $file_name);

            // Create Event
            $event = new Event();
            $event->title = $request->title;
            $event->details = $request->details;
            $event->image = $file_name;
            $event->price_member = $request->price_member;
            $event->price_non_member = $request->price_non_member;
            $event->is_active = $request->is_active;
            $event->date = $request->date;
            $event->start_time = $request->start_time; 
            $event->end_time = $request->end_time; 
            $event->address = $request->address;
            $event->country = $request->country;
            $event->state = $request->state;
            $event->city = $request->city;
            $event->pincode = $request->pincode;
            $event->save();

            $users = \App\Models\User::role('user')->get(); // Get all users with the "admin" role

            foreach ($users as $user) {
                \Mail::to($user->email)->send(new \App\Mail\UserEventNotification($event));
            }


            // Redirect on success
            return redirect()->route('events.list')->with('success', 'Event created successfully.');
        } catch (\Throwable $th) {
            // Handle error\
            // return back()->with('error', 'Failed to create event.');
            return $th;
        }
    }


    public function show(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $event = Event::findOrFail($id);
            return view('frontend.events.view')
                ->with('event', $event);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('events.index')->with('error', 'User not found.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        try {
            $event = Event::findOrFail($id);
            return view('frontend.events.edit')->with('event', $event);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('events.index')->with('error', 'Event not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        DB::beginTransaction();
    
        try {
            // Retrieve the existing event by ID
            $event = Event::findOrFail($id);
    
            // Validate the request data
            $validator = \Validator::make($request->all(), [
                'title' => 'sometimes|string|max:255',
                'details' => 'sometimes|string|max:16777215',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'date' => 'sometimes|date',
                'start_time' => 'nullable|date_format:H:i',
                'end_time' => 'nullable|date_format:H:i|after:start_time',
                'price_member' => 'nullable|numeric',
                'price_non_member' => 'nullable|numeric',
                // other fields...
            ]);
    
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
    
            // Debug the request data to check if image is being received
            // dd($request->all());
    
            // Check if a new image is uploaded
            if ($request->hasFile('image')) {
                // Log image processing
                \Log::info('New image uploaded');
    
                // Delete the old image if it exists
                if ($event->image && file_exists(public_path('images/events/' . $event->image))) {
                    \Log::info('Deleting old image: ' . $event->image);
                    unlink(public_path('images/events/' . $event->image));
                }
    
                // Upload the new image
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/events'), $file_name);
    
                // Set the new image name in the event record
                $event->image = $file_name;
                \Log::info('Image uploaded successfully: ' . $file_name);
            }
    
            // Update the event fields
            $event->title = $request->title;
            $event->details = $request->details;
            $event->price_member = $request->price_member;
            $event->price_non_member = $request->price_non_member;
            $event->is_active = $request->is_active;
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
        if (!Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard')->with('error', 'Access denied. Admins only.');
        }
        
        DB::beginTransaction();
        try {
            $event = Event::findOrFail($id);
            // Delete event image securely
            if ($event->image && File::exists(storage_path("app/public/images/events/{$event->image}"))) {
                File::delete(storage_path("app/public/images/events/{$event->image}"));
            }
            $event->delete();

            DB::commit();
            return redirect()->route('events.list')->with('success', 'Event deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete events.');
        }
    }


    public function bookEvent(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $user = Auth::user();

        // Check if the user has already booked
        if (Booking::where('event_id', $eventId)->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'You have already booked this event.');
        }

        // Generate a unique booking ID
        $bookingId = 'BOOK-' . strtoupper(uniqid());

        // Calculate the amount with a membership discount (if applicable)
        $isMember = $user->hasRole('member'); // Assuming a 'is_subscribed' flag in users table
        $amount = $isMember ? $event->price_member : $event->price_non_member; // 20% discount for members

        // Store the booking
        $booking = Booking::create([
            'user_id' => $user->id,
            'event_id' => $eventId,
            'booking_id' => $bookingId,
            'amount' => $amount,
            'is_member' => $isMember,
        ]);


        $admins = \App\Models\User::role('admin')->get(); // Get all users with the "admin" role
        foreach ($admins as $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\AdminBookingNotification($booking));
        }

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
        $attendees = Booking::where('event_id', $eventId)->with('event')->with('user')->get();
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
        $attendees = Booking::where('user_id', $user->id)->with('event')->with('user')->get();
        return view('frontend.events.view-booking')->with('attendees', $attendees);
    }
}
