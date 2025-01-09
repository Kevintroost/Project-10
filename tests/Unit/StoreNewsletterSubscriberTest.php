<?php

namespace Tests\Unit;

use App\Models\NewsletterSubscriber;
use App\Mail\WelcomeEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class StoreNewsletterSubscriberTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function Store_Newsletter_Subscriber_successfully()
{
    // Fake the Mail facade to prevent actually sending emails
    Mail::fake();

    // Define a valid email to subscribe
    $email = 'RaminoHiromiVrca@gmail.com';

    // Call the method using a POST request to simulate the form submission
    $response = $this->post(route('email.create'), [
        'email' => $email
    ]);

    // Assert that the subscriber is added to the database
    $this->assertDatabaseHas('newsletter_subscribers', [
        'email' => $email,
    ]);

    // Assert that the email was queued
    Mail::assertQueued(WelcomeEmail::class, function ($mail) use ($email) {
        return $mail->hasTo($email);
    });

    // Assert redirection and success message 
    $response->assertRedirect('/');
    $response->assertSessionHas('status', 'You have successfully subscribed to our newsletter!');
}




    /** @test */
    public function Store_Newsletter_Subscriber_Failed()
    {
        // Fake the Mail facade to prevent actually sending emails
        Mail::fake();

        // Define an invalid email 
        $invalidEmail = 'RaminoHiromiVrca@gmail.com';

        // Create a subscriber for the invalid email 
        NewsletterSubscriber::create([
            'email' => $invalidEmail,
            'subscribed_at' => now()
        ]);

        // Send the request to subscribe with an email that already exists
        $response = $this->post(route('email.create'), [
            'email' => $invalidEmail
        ]);

        // Assert that the validation failed
        $response->assertSessionHasErrors('email'); 

        // Assert that the email was not added again to the database
        $this->assertDatabaseCount('newsletter_subscribers', 1); 

        // Assert no email was queued
        Mail::assertNotQueued(WelcomeEmail::class);
    }
}
