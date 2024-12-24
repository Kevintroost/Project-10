<?php

namespace App\Http\Controllers;

use App\Models\EventRequest;
use Illuminate\Http\Request;

class EventRequestController extends Controller
{

    public function index() {

    
        return view('event-request.index');
    }




    public function create()
    {
        $provinces = [
            'Drenthe',
            'Flevoland',
            'Friesland',
            'Gelderland',
            'Groningen',
            'Limburg',
            'North Brabant',
            'North Holland',
            'Overijssel',
            'South Holland',
            'Utrecht',
            'Zeeland',
        ];
        return view('event-request.create', compact('provinces'));
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
            // 'details.min' => 'Details must be at least 10 characters long.',
        ]);

        EventRequest::create($validated);

        return redirect('/event-request/create')->with('success', 'Event request created successfully!');
    }
}
