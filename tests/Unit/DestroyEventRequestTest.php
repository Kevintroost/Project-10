<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Passport\Passport;
use App\Models\User;
use App\Models\EventRequest;

class DestroyEventRequestTest extends TestCase
{
    use RefreshDatabase; // Ensures the database is reset between tests

    /** @test */
    public function Destroy_Event_Request_Successfully()
    {
        // Create a sample user and log the user in
        $user = User::factory()->create();
        $this->actingAs($user); // Authenticate the user for the test

        // Create a sample event request
        $eventRequest = EventRequest::factory()->create();

        // Simulate the DELETE request to the destroy method
        $response = $this->deleteJson(route('eventrequests.destroy', $eventRequest->id));

        // Assert the response status is 204 (No Content)
        $response->assertStatus(204);

        // Assert the event request was deleted
        $this->assertDatabaseMissing('event_requests', [
            'id' => $eventRequest->id,
        ]);
    }

    /** @test */
    public function Destroy_Event_Request_failed()
    {
        // Create a sample user and log the user in
        $user = User::factory()->create();
        $this->actingAs($user); // Authenticate the user for the test

        // Try to delete a non-existent event request
        $response = $this->deleteJson(route('eventrequests.destroy', 9999)); // 9999 should not exist

        // Assert the response status is 404 (Not Found)
        $response->assertStatus(404);
    }
}
    