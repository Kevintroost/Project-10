<?php

namespace Tests\Unit;

use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DestroyReviewTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function Destroy_Review_Successfully()
    {
        $user = User::factory()->create();
        $this->actingAs($user);


        // Create a review in the database
        $review = Review::factory()->create();

        // Send a DELETE request to remove the review
        $response = $this->delete(route('review.destroy', $review->id));

        // Assert the review is deleted from the database
        $this->assertDatabaseMissing('reviews', ['id' => $review->id]);

        // Assert the response redirects with a success message
        $response->assertRedirect()
                 ->assertSessionHas('success', 'Review deleted successfully!');
    }

    /** @test */
    public function Destroy_Review_failed()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        
        // Attempt to delete a review that does not exist (ID 9999)
        $response = $this->delete(route('review.destroy', 9999));

        // Assert a 404 Not Found response is returned
        $response->assertStatus(404)
                 ->assertJson(['message' => 'Review not found!']);
    }
}

