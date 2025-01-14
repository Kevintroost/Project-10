<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{
    // Method to fetch all event requests and return to the index view

    public function index()
    {
        return view('event-request/index');
    }

    public function data()
    {
        // Fetch all event requests
        $eventRequests = EventRequest::all();

        // Return the Blade view and pass the event requests to it

        return response()->json($eventRequests, 200);
    }

    public function create()
    {
        return view('event-request/create');
    }


    // Method to store an event request
    public function store(Request $request)
    {
        try {
            // Validate the form data (optional but recommended)
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'date' => 'required|date',
                'details' => 'required|string',
            ]);

            // Store the event request
            $eventRequest = EventRequest::create($validated);

            // Redirect back with a success message
            return redirect()->route('event-request.create')->with('success', 'Your event request has been submitted successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->route('event-request.create')->withErrors($e->errors())->withInput();
        }
    }
    // Method to update an event request
    public function update(Request $request, $id)
    {
        $eventRequest = EventRequest::findOrFail($id);
        $eventRequest->update($request->all());
        return response()->json($eventRequest);
    }

    // Method to delete an event request
    public function destroy($id)
    {
        $eventRequest = EventRequest::findOrFail($id);
        $eventRequest->delete();
        return response()->json(null, 204);
    }


    public function updateStatus(Request $request, $id)
    {
        $eventRequest = EventRequest::findOrFail($id);

        // Ensure the status is valid
        $validStatuses = ['To-Do', 'In Progress', 'Done'];
        if (!in_array($request->status, $validStatuses)) {
            return response()->json(['error' => 'Invalid status'], 400);
        }

        // Update the event's status
        $eventRequest->status = $request->status;
        $eventRequest->save();

        return response()->json(['success' => 'Event status updated'], 200);
    }

}
