<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventController extends Controller
{
    public function index()
    {
        // Retrieve all events from the database
        $events = Event::orderByRaw('STR_TO_DATE(event_date, "%Y-%m-%d") asc')->paginate(8);
        return view('events.index', compact('events'));
    }




    public function Store(Request $request)
    {

        // Validate the request
        $validated = $request->validate([
            'event_name' => 'required|string|min: 3|max:255',
            'event_date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
            'location' => 'required|string|min:3|max:255',
            'event_type' => 'required|string|min:3 |max:255',
            'description' => 'required|nullable|string|min:20 |max:2000',
            'ticket_link' => 'required|string|min:10 |max:1000',
            'event_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'event_date.after_or_equal' => 'The event date must be today or in the future.',
        ]);

        // Save the uploaded image directly to the public/images directory
        $imagename = time() . '.' . $request->file('event_picture')->extension();
        $request->file('event_picture')->move(public_path('images'), $imagename);

        // Create the event
        $event = new Event();
        $event->event_name = $validated['event_name'];
        $event->event_date = $validated['event_date'];
        $event->location = $validated['location'];
        $event->event_type = $validated['event_type'];
        $event->description = $validated['description'] ?? null;
        $event->ticket_link = $validated['ticket_link'];
        $event->event_picture = 'images/' . $imagename;
        $event->save();

        return redirect('/admin/dashboard/events/create')->with('success', 'Event request created successfully!');
    }




    public function Destroy(Request $request)
    {
        // Retrieve the event_id from the request
        $id = $request->input('event_id');

        try {
            // Attempt to find the event by its ID
            $event = Event::findOrFail($id);

            // Delete the event if found
            $event->delete();

            // Redirect back with a success message
            return redirect('/admin/dashboard/events/create')->with('success', 'Event deleted successfully');
        } catch (ModelNotFoundException $e) {
            // If the event is not found, redirect with an error message
            return redirect('/admin/dashboard/events/create')->with('error', 'Event not found');
        }
    }


    public function Search(Request $request)
    {
        $query = $request->input('query');
        $location = $request->input('location');
        $date = $request->input('date');

        // Build the query dynamically
        $events = Event::query();

        // Apply filters only if the corresponding field is filled
        if ($query) {
            $events->where('event_name', 'LIKE', "%{$query}%");
        }

        // Apply filters only if the corresponding field is filled
        if ($location) {
            $events->where('location', 'LIKE', "%{$location}%");
        }

        if ($date) {
            $events->whereDate('event_date', $date);
        }

        // Handle the case where no filters are applied
        if (empty($query) && empty($location) && empty($date)) {
            $events->whereRaw('1 = 0'); // Ensures no results are returned
        }

        // Apply ordering and pagination
        $events = $events->orderBy('event_date', 'asc')->paginate(8);

        return view('results', compact('events', 'query', 'location', 'date'));
    }
    // Update the event
    public function Update(Request $request, $id)
    {
        // Validate the updated event details
        $validated = $request->validate([
            'event_name' => 'required|string|min:3|max:255',
            'event_date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
            'location' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|min:20|max:2000',
            'ticket_link' => 'required|string|min:10|max:255',
        ], [
            'event_date.after_or_equal' => 'The event date must be today or in the future.',
        ]);

        // Find the event by its ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            // Return a 404 response if the event doesn't exist
            return response()->json(['message' => 'Event not found!'], 404);
        }

        // Update the event details
        $event->event_name = $validated['event_name'];
        $event->event_date = $validated['event_date'];
        $event->location = $validated['location'];
        $event->description = $validated['description'] ?? null;
        $event->ticket_link = $validated['ticket_link'];

        // Save the updated event
        $event->save();

        // Redirect back to the edit page with a success message
        return redirect('/admin/dashboard/events/edit/' . $id)->with('success', 'Event updated successfully!');
    }
}