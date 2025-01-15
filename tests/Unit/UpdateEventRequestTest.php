<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\EventRequest;
use App\Models\User;
use Laravel\Passport\Passport;
class UpdateEventRequestTest extends TestCase
{

    use RefreshDatabase; // Ensures the database is refreshed after each test

    /** @test */
    public function Update_Event_Request_Successfully()
    {
        // Create a sample user
        $user = User::factory()->create();

        // Log the user in
        $this->actingAs($user);

        // Create a sample event request
        $eventRequest = EventRequest::create([
            'name' => 'Sample Event',
            'email' => 'sample@example.com',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-01-15',
            'details' => 'This is a sample event description.',
        ]);

        // Prepare valid data to update the event
        $updatedData = [
            'name' => 'Updated Event Name',
            'email' => 'updated@example.com',
            'phone' => '0987654321',
            'location' => 'Los Angeles',
            'date' => '2025-02-20',
            'details' => 'Updated event description.',
        ];

        // Simulate the request
        $response = $this->putJson(route('eventrequests.update', $eventRequest->id), $updatedData);

        // Assert the response status is 200
        $response->assertStatus(200);

        // Assert the updated data is correct in the response
        $response->assertJsonFragment([
            'name' => 'Updated Event Name',
            'email' => 'updated@example.com',
            'phone' => '0987654321',
            'location' => 'Los Angeles',
            'date' => '2025-02-20',
            'details' => 'Updated event description.',
        ]);

        // Verify the event request was updated in the database
        $this->assertDatabaseHas('event_requests', [
            'id' => $eventRequest->id,
            'name' => 'Updated Event Name',
            'email' => 'updated@example.com',
            'phone' => '0987654321',
            'location' => 'Los Angeles',
            'date' => '2025-02-20',
            'details' => 'Updated event description.',
        ]);
    }


    /** @test */
    public function Update_Event_Request_Failed()
    {
        // Create a sample user and log them in using session authentication
        $user = User::factory()->create();
        $this->actingAs($user);  // Log the user in using session-based authentication (for web routes)

        // Create a sample event request
        $eventRequest = EventRequest::create([
            'name' => 'Sample Event',
            'email' => 'sample@example.com',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-01-15',
            'details' => 'This is a sample event description.',
        ]);

        // Prepare invalid data to simulate a validation failure
        $invalidData = [
            'name' => '', // Name is required and should not be empty
            'email' => 'invalid-email', // Invalid email format
            'phone' => '', // Phone is required and should not be empty
            'location' => '', // Location is required and should not be empty
            'date' => 'invalid-date', // Invalid date format
            'details' => '', // Details is required and should not be empty
        ];

        // Simulate the request with invalid data
        $response = $this->putJson(route('eventrequests.update', $eventRequest->id), $invalidData);

        // Assert the response status is 422 (validation error)
        $response->assertStatus(422);

        // Assert the validation errors are present in the response
        $response->assertJsonValidationErrors(['name', 'email', 'phone', 'location', 'date', 'details']);
    }
}