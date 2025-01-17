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
    public function Store_Event_successfully()
    {
        // Make sure the directory exists and is writable
        $directory = public_path('images');
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

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

        // Generate the custom image name based on timestamp
        $imagename = time() . '.' . $file->extension();

        // Store the file in the 'public/images' directory with the custom image name
        $path = $file->storeAs('images', $imagename, 'public');

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

        // Verify that the file exists in the public/images directory
        $eventImagePath = 'images/' . $imagename;
        $this->assertTrue(file_exists(public_path($eventImagePath)), 'File was not saved in public/images.');

        // Reset mocked time
        Carbon::setTestNow(null);
    }

    /**
     * Test storing an event with invalid data 
     *
     * @return void
     */
    public function Store_Event_Failed()
    {
        // Fake the storage disk
        Storage::fake('public');

        // Create a fake non-image file 
        $file = UploadedFile::fake()->create('event_picture.txt', 100);

        // Create and authenticate a test user
        $this->actingAsTestUser();

        // Set a fixed time using Carbon
        Carbon::setTestNow(Carbon::create(2024, 12, 19, 12, 0, 0));

        // Data to store the event with an invalid image type
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

        // Assertions: The response should not redirect, since validation should fail
        $response->assertStatus(302);
        $response->assertSessionHasErrors('event_picture');

        // Verify that no event was stored in the database
        $this->assertDatabaseMissing('events', [
            'event_name' => 'Sample Event',
        ]);

        // Verify that no files are stored
        $files = Storage::disk('public')->allFiles();
        $this->assertEmpty($files, 'Files were stored despite invalid image.');

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
            'email' => fake()->unique()->safeEmail(),
        ]);
        $this->actingAs($user);

        return $user;
    }
}

