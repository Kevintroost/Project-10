<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreEventRequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function store_event_request_successfully()
    {
        // Define valid form data
        $formData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-05-12',
            'details' => 'This is a test event request.',
        ];

        // Perform the POST request to the store route
        $response = $this->post(route('event-request.store'), $formData);

        // Assert that the event request was stored in the database
        $this->assertDatabaseHas('event_requests', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-05-12',
            'details' => 'This is a test event request.',
        ]);

        // Assert that the response redirects correctly
        $response->assertRedirect(route('event-request.create'));

        // Assert that the session contains the success message
        $response->assertSessionHas('success', 'Your event request has been submitted successfully!');
    }




    /** @test */
    public function Store_Event_Request_Failed()
    {
        // Simulate a POST request with missing email data
        $formdata = [
            'name' => 'John Doe',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-05-12',
            'details' => 'This is a test event request.',
            // Missing email
        ];

        // Perform the POST request
        $response = $this->post(route('event-request.store'), $formdata);

        // Assert that the request is NOT stored in the database 
        $this->assertDatabaseMissing('event_requests', [
            'name' => 'John Doe',
            'phone' => '1234567890',
            'location' => 'New York',
            'date' => '2025-05-12',
            'details' => 'This is a test event request.',
        ]);

        // Assert the response is a redirect back to the correct form URL
        // Ensure the redirect goes to the right route
        $response->assertRedirect(route('event-request.create'));

        // Assert that the session contains validation errors for the missing 'email' field
        $response->assertSessionHasErrors('email');
    }

}