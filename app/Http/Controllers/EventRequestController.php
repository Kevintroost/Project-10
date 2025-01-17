<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{
    // Method to fetch all event requests and return to the index view

    public function Index()
    {
        return view('event-request/index');
    }

    public function Data()
    {
        // Fetch all event requests
        $eventRequests = EventRequest::all();

        // Return the Blade view and pass the event requests to it

        return response()->json($eventRequests, 200);
    }

    public function Create()
    {
        return view('event-request/create');
    }


    // Method to store an event request
    public function Store(Request $request)
    {
        try {
            // Validate the form data 
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'date' => 'required|date',
                'details' => 'required|string',
            ]);

            EventRequest::create($validated);

            // Redirect back with a success message
            return redirect()->route('event-request.create')->with('success', 'Your event request has been submitted successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->route('event-request.create')->withErrors($e->errors())->withInput();
        }
    }


    // Method to update an event request
    public function Update(Request $request, $id)
    {
        // Find the event request by ID or fail
        $eventrequest = EventRequest::findOrFail($id);

        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'required|string',
        ]);

        // Update the event request with the validated data
        $eventrequest->update($validatedData);

        // Return the updated event request as JSON
        return response()->json($eventrequest);
    }


    // Method to delete an event request
    public function Destroy($id)
    {
        $eventrequest = EventRequest::findOrFail($id);
        $eventrequest->delete();
        return response()->json(null, 204);
    }


    public function UpdateStatus(Request $request, $id)
    {
        $eventRequest = EventRequest::findOrFail($id);

        // Ensure the status is valid
        $validstatuses = ['To-Do', 'In Progress', 'Done'];
        if (!in_array($request->status, $validstatuses)) {
            return response()->json(['error' => 'Invalid status'], 400);
        }

        // Update the event's status
        $eventRequest->status = $request->status;
        $eventRequest->save();

        return response()->json(['success' => 'Event status updated'], 200);
    }

}
