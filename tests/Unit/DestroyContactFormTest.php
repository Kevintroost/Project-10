<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroyContactFormTest extends TestCase
{
    use RefreshDatabase; // Ensures the database is reset between tests


    /** @test */
    public function test_destroy_contact_form_successfully()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a sample contact form
        $contactForm = ContactForm::factory()->create();

        // Simulate the DELETE request to the destroy method
        $response = $this->delete(route('contact.destroy', $contactForm->id));

        // Assert the response redirects to the contact index page
        $response->assertRedirect(route('contact.index'));

        // Assert a success message is in the session
        $response->assertSessionHas('success', 'Contact deleted successfully.');

        // Assert the contact form was deleted from the database
        $this->assertDatabaseMissing('contact_forms', [
            'id' => $contactForm->id,
        ]);
    }


    /** @test */
    public function test_destroy_contact_form_failed()
    {
        // Create a sample user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Attempt to delete a non-existent contact form entry
        $response = $this->delete(route('contact.destroy', 9999)); // ID 9999 should not exist

        // Assert the response status is 404 (Not Found)
        $response->assertStatus(404);
    }



}
