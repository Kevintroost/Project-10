<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use Mockery;
use App\Mail\ContactMail;


class StoreContactFormTest extends TestCase
{

    /** @test */
    public function Store_Contact_Form_Successfully()
{
    // Fake the mailer
    Mail::fake();

    // Define valid form data
    $formdata = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'phone' => '1234567890',
        'details' => 'This is a valid test message with sufficient details.',
    ];

    // Simulate a POST request to the store route
    $response = $this->post(route('contact.store'), $formdata);

    // Assert that the form data was validated and stored in the database
    $this->assertDatabaseHas('contact_forms', [
        'name' => $formdata['name'],
        'email' => $formdata['email'],
        'phonenumber' => $formdata['phone'],
        'message' => $formdata['details'],
    ]);

    // Assert that an email was queued
    Mail::assertQueued(ContactMail::class, function ($mail) use ($formdata) {
        return $mail->hasTo($formdata['email']) &&
               $mail->getContact()->name === $formdata['name'] &&
               $mail->getContact()->message === $formdata['details'];
    });

    // Assert that the response redirects correctly
    $response->assertRedirect('/contact/create');
    $response->assertSessionHas('success', 'Your message has been sent!');
}



    /** @test */
    public function Store_Contact_Form_Failed()
    {
        // Define invalid form data
        $formData = [
            'name' => 'abc', 
            'email' => 'invalid-email', 
            'phone' => 'not-a-number', 
            'details' => 'short', 
        ];

        // Validate the data
        $validator = Validator::make($formData, [
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|min:5|max:255',
            'phone' => 'nullable|numeric',
            'details' => 'nullable|string|min:10|max:1000',
        ]);

        // Assert that the validation fails
        $this->assertTrue($validator->fails(), 'Validation should fail for invalid data');

        // Assert validation errors
        $errors = $validator->errors()->toArray();
        $this->assertArrayHasKey('name', $errors, 'Validation error expected for name');
        $this->assertArrayHasKey('email', $errors, 'Validation error expected for email');
        $this->assertArrayHasKey('phone', $errors, 'Validation error expected for phone');
        $this->assertArrayHasKey('details', $errors, 'Validation error expected for details');
    }




}
