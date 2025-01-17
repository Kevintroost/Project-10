<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\EventRequest;

class UpdateStatusEventRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test updating the status of an event request successfully.
     */

    /** @test */
    public function Update_Status_Event_Request_Successfully()
    {
        // Create a test event request
        $eventRequest = EventRequest::factory()->create(['status' => 'To-Do']);

        // Update the status to a valid status
        $response = $this->patchJson(route('event-request.update-status', $eventRequest->id), [
            'status' => 'In Progress',
        ]);

        // Assert successful response
        $response->assertStatus(200);
        $response->assertJson(['success' => 'Event status updated']);

        // Assert the status was updated in the database
        $this->assertDatabaseHas('event_requests', [
            'id' => $eventRequest->id,
            'status' => 'In Progress',
        ]);
    }

    /**
     * Test updating the status of an event request fails with invalid status.
     */

    /** @test */
    public function Update_Status_Event_Request_Failed()
    {
        // Create a test event request
        $eventrequest = EventRequest::factory()->create(['status' => 'To-Do']);

        // Attempt to update with an invalid status
        $response = $this->patchJson(route('event-request.update-status', $eventrequest->id), [
            'status' => 'Invalid Status',
        ]);

        // Assert failure response
        $response->assertStatus(400);
        $response->assertJson(['error' => 'Invalid status']);

        // Assert the status was not updated in the database
        $this->assertDatabaseHas('event_requests', [
            'id' => $eventrequest->id,
            'status' => 'To-Do',
        ]);
    }


}
