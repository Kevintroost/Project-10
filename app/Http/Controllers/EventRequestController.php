<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{
    public function create()
    {
        return view('event-request.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'details' => 'nullable|string|min:10',
            'date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'), // Validates that the date is not in the past
        ], [
            'date.after_or_equal' => 'The event date must be today or in the future.',
            'details.min' => 'Details must be at least 10 characters long.',
        ]);

        $eventRequest = EventRequest::create($validated);

        return response()->json([
            'message' => 'Event request created successfully!',
            'data' => $eventRequest,
        ], 201);
    }
}
