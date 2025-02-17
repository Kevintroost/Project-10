<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{


    public function Create()
    {
        // Fetch the data for total reviews and all reviews
        $totalreviews = Review::count();
        $reviews = Review::all();

        $reviews = Review::orderBy('created_at', 'desc')->paginate(3);

        // Return the view with the necessary data
        return view('about-us.create', compact('totalreviews', 'reviews'));
    }
    // Store a new review
    public function Store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|min: 3 |max:255',
            'email' => 'required|email|min: 3|max:255',
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|min:10|max:1000',
        ]);

        // Create a new review in the database
        $review = new Review();
        $review->name = $validated['name'];
        $review->email = $validated['email'];
        $review->rating = $validated['rating'];
        $review->review = $validated['review'];
        $review->save();

        // Flash success message
        session()->flash('success', 'Review submitted successfully!');

        // Return a redirect response to reload the page
        return redirect()->back();
    }


    public function Destroy($id)
    {
        // Find the review
        $review = Review::find($id);

        // Check if the review exists
        if (!$review) {
            return response()->json(['message' => 'Review not found!'], 404);
        }

        // Delete the review
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully!');
    }


    // Get all reviews 
    public function Index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }
}
