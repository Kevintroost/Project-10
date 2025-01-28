<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{


    public function create()
    {

        return view('review.create');


    }
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
        $review = new Review();
        $review->name = $validated['name'];
        $review->email = $validated['email'];
        $review->rating = $validated['rating'];
        $review->review = $validated['review'];
        $review->save();

        // Return a success message


        return response()->json(['message' => 'Review submitted successfully!'], 200);
    }


    // Get all reviews (for display)
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }
}
