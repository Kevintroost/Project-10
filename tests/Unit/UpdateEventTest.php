<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Event;
use App\Models\User;

class UpdateEventTest extends TestCase
{
    use RefreshDatabase;



    // Test to update an event successfully
    /** @test */
    public function Update_Event_Successfully()
    {
        // Create a sample event
        $event = Event::factory()->create();

        // Authenticate a user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Data for updating the event
        $updatedata = [
            'event_name' => 'Updated Event Name',
            'event_date' => now()->addDays(5)->format('Y-m-d'),
            'location' => 'New Location',
            'description' => 'This is an updated description for the event.',
            'ticket_link' => 'https://example.com/tickets',
        ];

        // Perform the PATCH request
        $response = $this->patch('/admin/dashboard/events/edit/' . $event->id, $updatedata);

        // Assert the update was successful
        $response->assertRedirect('/admin/dashboard/events/edit/' . $event->id);
        $response->assertSessionHas('success', 'Event updated successfully!');

        // Assert the database has the updated data
        $this->assertDatabaseHas('events', [
            'id' => $event->id,
            'event_name' => 'Updated Event Name',
            'event_date' => now()->addDays(5)->format('Y-m-d'),
            'location' => 'New Location',
            'description' => 'This is an updated description for the event.',
            'ticket_link' => 'https://example.com/tickets',
        ]);
    }


    // Test to update an event with invalid data
    /** @test */
    public function Update_Event_Failed()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Data for updating the event
        $updatedata = [
            'event_name' => 'Updated Event Name',
            'event_date' => now()->addDays(5)->format('Y-m-d'),
            'location' => 'New Location',
            'description' => 'This is an updated description for the event.',
            'ticket_link' => 'https://example.com/tickets',
        ];

        // Perform the update request with an invalid ID
        $response = $this->patch('/admin/dashboard/events/edit/9999', $updatedata);

        // Assert a 404 response (event not found)
        $response->assertStatus(404);
    }
}