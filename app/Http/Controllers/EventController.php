<?php

namespace App\Http\Controllers;

use Event;
use Illuminate\Http\Request;

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
        'event-name' => 'required|string|max:255',
        'event-date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'), // Validates that the date is not in the past
        'location' => 'required|string|max:255',
        'event-type' => 'required|string|max:255',
        'description' => 'nullable|string|min:20',
        'ticket-link' => 'required|string|min:10',  
        'event-picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ], [
        'date.after_or_equal' => 'The event date must be today or in the future.',
        // 'details.min' => 'Description must be at least 20 characters long.',
    ]);

    Event::create($validated);

    return redirect('/event/create')->with('success', 'Event request created successfully!');
}

}





