<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Store a new review
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|max:1000',
        ]);

        // Create a new review in the database
        $review = Review::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'rating' => $validated['rating'],
            'review' => $validated['review'],
        ]);

        return response()->json(['message' => 'Review submitted successfully!'], 200);
    }


    // Get all reviews (for display)
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }
}
