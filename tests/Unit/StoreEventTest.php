<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\User;

class StoreEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test storing an event with valid data.
     *
     * @return void
     */
    public function test_it_stores_an_event_with_valid_data()
    {
        // Fake the storage disk
        Storage::fake('public');

        // Create a fake image file
        $file = UploadedFile::fake()->image('event_picture.jpg');

        // Create and authenticate a test user
        $this->actingAsTestUser();

        // Set a fixed time using Carbon
        Carbon::setTestNow(Carbon::create(2024, 12, 19, 12, 0, 0));

        // Data to store the event
        $data = [
            'event_name' => 'Sample Event',
            'event_date' => now()->addDay()->format('Y-m-d'),
            'location' => 'Sample Location',
            'event_type' => 'Concert',
            'description' => 'This is a sample event description that exceeds 20 characters.',
            'ticket_link' => 'http://example.com/tickets',
            'event_picture' => $file,
        ];

        // Make the request to store the event
        $response = $this->post('/events/store', $data);

        // Assertions
        $response->assertRedirect('/admin/dashboard/events/create');
        $response->assertSessionHas('success', 'Event request created successfully!');

        // Verify the event was stored in the database
        $this->assertDatabaseHas('events', [
            'event_name' => 'Sample Event',
            'location' => 'Sample Location',
        ]);

        // List all files in the fake storage
        $files = Storage::disk('public')->allFiles();
        dump($files); // Debugging files in the storage

        // Assert that a file exists in the 'images/' directory, and its name starts with a timestamp
        $this->assertNotEmpty($files, 'No files found in storage.');
        
        // Find the file that starts with a timestamp in the 'images/' directory
        $eventImage = collect($files)->first(function ($file) {
            return strpos($file, 'images/') === 0; // Ensures file starts with 'images/'
        });

        // Assert that the event image file exists and has been saved correctly
        $this->assertNotNull($eventImage, 'Event image file not found in the expected directory.');
        $this->assertTrue(Storage::disk('public')->exists($eventImage), 'File not found in storage.');

        // Reset mocked time
        Carbon::setTestNow(null);
    }




    /**
     * Helper function to create and authenticate a test user.
     *
     * @return \App\Models\User
     */
    private function actingAsTestUser()
    {
        // Ensure unique email for test users
        $user = User::factory()->create([
            'email' => fake()->unique()->safeEmail(), // Use a unique email
        ]);
        $this->actingAs($user);

        return $user;
    }

}
