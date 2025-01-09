<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{
    // Method to fetch all event requests and return to the index view
    public function index()
    {
        // Fetch all event requests
        $eventRequests = EventRequest::all();

        dd($eventRequests); 
        // Return the Blade view and pass the event requests to it
        return view('event-request.index', compact('eventRequests'));
    }

    public function create()
    {
        return view('event-request/create');
    }

    // Method to store a new event request/  // /// / / // / // / / / / // / / / / /    
    public function store(Request $request)
    {
        $eventRequest = EventRequest::create($request->all());
        return response()->json($eventRequest, 201);
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
}
