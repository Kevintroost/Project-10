<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Event;

class SearchEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test search with query filter.
     */
    public function test_search_with_query()
    {
        // Create test events
        Event::factory()->create(['event_name' => 'Music Festival']);
        Event::factory()->create(['event_name' => 'Art Exhibition']);

        $response = $this->get('/search?query=Music');

        $response->assertStatus(200);
        $response->assertSee('Music Festival');
        $response->assertDontSee('Art Exhibition');
    }

    /**
     * Test search with location filter.
     */
    public function test_search_with_location()
    {
        // Create test events
        Event::factory()->create(['location' => 'New York']);
        Event::factory()->create(['location' => 'Los Angeles']);

        $response = $this->get('/search?location=New York');

        $response->assertStatus(200);
        $response->assertSee('New York');
        $response->assertDontSee('Los Angeles');
    }

    /**
     * Test search with date filter.
     */
    public function test_search_with_date()
    {
        // Create test events
        Event::factory()->create(['event_date' => '2025-01-01']);
        Event::factory()->create(['event_date' => '2025-02-01']);

        $response = $this->get('/search?date=2025-01-01');

        $response->assertStatus(200);
        $response->assertSee('2025-01-01');
        $response->assertDontSee('2025-02-01');
    }

    /**
     * Test search with no filters.
     */
    public function test_search_with_no_filters()
    {
        // Create test events
        Event::factory()->create(['event_name' => 'Test Event']);

        $response = $this->get('/search');

        $response->assertStatus(200);
        $response->assertDontSee('Test Event'); // No results should be returned
    }

    /**
     * Test search with multiple filters.
     */
    public function test_search_with_multiple_filters()
    {
        // Create test events
        Event::factory()->create([
            'event_name' => 'Music Festival',
            'location' => 'New York',
            'event_date' => '2025-01-01',
        ]);
        Event::factory()->create([
            'event_name' => 'Art Exhibition',
            'location' => 'Los Angeles',
            'event_date' => '2025-02-01',
        ]);

        $response = $this->get('/search?query=Music&location=New York&date=2025-01-01');

        $response->assertStatus(200);
        $response->assertSee('Music Festival');
        $response->assertDontSee('Art Exhibition');
    }
}