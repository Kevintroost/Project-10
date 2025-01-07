<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class EventDestroyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the event is deleted successfully when it exists.
     *
     * @return void
     */
    public function test_event_is_deleted_successfully()
    {
        // Create a test user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create an event to delete
        $event = Event::factory()->create();

        // Call the destroy method with the event ID
        $response = $this->delete(route('events.destroy'), ['event_id' => $event->id]);

        // Assert that the event is deleted from the database
        $this->assertDatabaseMissing('events', ['id' => $event->id]);

        // Assert the redirection with success message
        $response->assertRedirect('/admin/dashboard/events/create');
        $response->assertSessionHas('success', 'Event deleted successfully');
    }

    /**
     * Test that attempting to delete an event that doesn't exist doesn't change the database.
     *
     * @return void
     */
    public function test_event_not_found_does_not_delete_anything()
    {
        // Create a test user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);
    
        // Try to delete an event that doesn't exist (invalid event_id)
        $response = $this->delete(route('events.destroy'), ['event_id' => 999]);
    
        // Assert that the database still contains no events (no deletion occurred)
        $this->assertDatabaseCount('events', 0);
    
        // Assert that the user is redirected to the correct page with the error message
        // Ensure it redirects to '/admin/dashboard/events/create' on validation failure
        $response->assertRedirect('/admin/dashboard/events/create');
        $response->assertSessionHas('error', 'Event not found');
    }
    

}
    