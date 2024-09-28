<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')->paginate(10); // Paginate results

        return view('frontend.events.index')->with('events', $events);
    }

    public function eventDetail(Request $request)
    {
        return view('frontend.events.event-detail');
    }

    public function list()
    {
        $events = Event::select('id', 'title', 'details', 'image', 'price_member', 'price_non_member', 'is_active', 'date', 'start_time', 'end_time', 'address', 'country', 'state', 'city', 'pincode', 'created_by', 'updated_by')->paginate(10); // Paginate results

        return view('frontend.events.list')->with('events', $events);
    }

    public function create()
    {
        return view('frontend.events.add');
    }

    public function store(Request $request)
{
    // dd($request->all());
    // Ensure the checkbox is handled properly
    $request->merge(['is_active' => $request->has('is_active') ? 1 : 0]);

    // Validations
    $validator = \Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'details' => 'required|string|max:16777215',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'price_member' => 'numeric',
        'price_non_member' => 'numeric',
        'is_active' => 'required|boolean',
        'date' => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i',
        'address' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'pincode' => 'required|string|max:10|regex:/^\d{4,10}$/',
    ]);

    if ($validator->fails()) {
        dd($validator->errors(), $request->all());
    }

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
        // Redirect on success
        return redirect()->route('events.list')->with('success', 'Event created successfully.');
    } catch (\Throwable $th) {
        // Handle error\
        return back()->with('error', 'Failed to create event.');
    }
}


    public function show(string $id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('frontend.events.view')
                ->with('event', $event);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('events.index')->with('error', 'User not found.');
        }
    }

    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $event = Event::findOrFail($id);
            $event->delete();

            DB::commit();
            return redirect()->route('events.list')->with('success', 'Event deleted successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to delete events.');
        }
    }
}
