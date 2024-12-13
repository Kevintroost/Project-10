<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Fetch all events
        return view('events.index', compact('events')); // Pass $events to the view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
            'location' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'description' => 'nullable|string|min:20',
            'ticket_link' => 'required|string|min:10',  
            'event_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'event_date.after_or_equal' => 'The event date must be today or in the future.',
        ]);
    
        // Save the uploaded image
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
        $event->event_picture = $imagename;
        $event->save();
    
        return redirect('/admin/dashboard/events/create')->with('success', 'Event request created successfully!');
    
    }
    

}







