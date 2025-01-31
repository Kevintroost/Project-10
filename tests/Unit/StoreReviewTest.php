<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreReviewTest extends TestCase
{
    // Use the RefreshDatabase trait to reset the database after each test
    use RefreshDatabase;

    /** @test */
    public function Store_Review_Successfully()
    {
        // Create sample data for the review submission
        $reviewData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'rating' => 5,
            'review' => 'This is a great product!'
        ];

        // Send a POST request to store the review
        $response = $this->post(route('about-us.store'), $reviewData);

        // Assert the review is stored in the database
        $this->assertDatabaseHas('reviews', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'rating' => 5,
            'review' => 'This is a great product!'
        ]);

        // Assert the user is redirected back with a success message
        $response->assertRedirect()
            ->assertSessionHas('success', 'Review submitted successfully!');
    }


    /** @test */
    public function Store_Review_Failed()
    {
        // Create invalid data 
        $invalidReviewData = [
            'name' => '',
            'email' => 'invalid-email',
            'rating' => 6,
            'review' => ''
        ];

        // Send a POST request to store the review with invalid data
        $response = $this->post(route('about-us.store'), $invalidReviewData);

        // Assert the validation errors are returned
        $response->assertSessionHasErrors([
            'name',
            'email',
            'rating',
            'review'
        ]);

        // Optionally, check for a specific error message for the rating
        $response->assertSessionHasErrors(['rating']);
    }
}
