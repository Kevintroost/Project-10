<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Event;

class SearchEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test search with query filter (successful).
     */
    public function test_search_with_query_success()
    {
        // Create test events
        Event::factory()->create(['event_name' => 'Music Festival']);
        Event::factory()->create(['event_name' => 'Art Exhibition']);

        // Send search request
        $response = $this->get('/results?query=Music');

        // Assert successful response and correct results
        $response->assertStatus(200);
        $response->assertSee('Music Festival');
        $response->assertDontSee('Art Exhibition');
    }

    /**
     * Test search with query filter 
     */
    public function test_search_with_query_failure()
    {
        // Create test events
        Event::factory()->create(['event_name' => 'Art Exhibition']);

        // Send search request with no matching results
        $response = $this->get('/results?query=Music');

        // Assert successful response but no results
        $response->assertStatus(200);
        $response->assertDontSee('Art Exhibition');
        $response->assertDontSee('Music Festival');
    }
}