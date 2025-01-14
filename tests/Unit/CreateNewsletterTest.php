<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\TestCase;
use App\Models\NewsletterSubscriber;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsLetter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithAuthentication;



class CreateNewsletterTest extends TestCase
{

    use RefreshDatabase, InteractsWithAuthentication;


    /** @test */
    public function Create_Newsletter_subscriber_successfully()
{
    {
        // Fake the Mailer to prevent real emails from being sent
        Mail::fake();

        // Seed the database with 3 newsletter subscribers
        NewsletterSubscriber::factory()->count(3)->create();

        // Create a test user (make sure to use an actual factory or existing user model)
        $user = User::factory()->create();

        // Simulate logging in as the test user
        $this->actingAs($user);

        // Simulate the request to create a newsletter
        $response = $this->post(route('newsletter.create'), [
            'title' => 'Test Newsletter',
            'description' => 'This is a test newsletter',
            'image_url' => 'https://via.placeholder.com/150.jpg', 
        ]);

        // Check that the response is a redirect (using 'back' behavior in the controller)
        $response->assertRedirect();

        // Assert that 3 emails were queued for the 3 subscribers
        Mail::assertQueued(NewsLetter::class, 3);
    }
}






    /** @test */
    public function Create_Newsletter_subscriber_failed()
    {
        // Seed the database with newsletter subscribers
        NewsletterSubscriber::factory()->count(3)->create();

        // Mock email sending
        Mail::fake();

        // Simulate logging in as a user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Simulate an invalid description (too short)
        $response = $this->post(route('newsletter.create'), [
            'title' => 'Test Newsletter',
            'description' => '2',  // Invalid description (too short)
            'image_url' => 'https://via.placeholder.com/150.jpg',
        ]);

        // Follow the redirect and assert errors after redirection
        $response->assertRedirect();

        // Assert that the session has errors for the 'description' field
        $response->assertSessionHasErrors('description');

        // Assert that no emails were sent
        Mail::assertNothingQueued();
    }

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



