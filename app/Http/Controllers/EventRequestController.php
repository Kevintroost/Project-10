<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{
    public function create()
    {
        return view('event-request.create'); // Your form view
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'details' => 'nullable|string|min:10',
            'date' => 'required|date|after_or_equal:today', // Ensures the date is valid
        ]);

        // Create the event request in the database
        $eventRequest = EventRequest::create($validated);

        dd($eventRequest);

        // Return a response
        return response()->json([
            'message' => 'Event request created successfully!',
            'data' => $eventRequest,
        ], 201);
    }
}
