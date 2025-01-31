<?php

namespace Tests\Unit;
use App\Models\FotoGalerie;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use App\Models\Event;

use Illuminate\Validation\Rules\Unique;
use Tests\TestCase;

class DestroyFotoGalerieTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function Destroy_image_successfully()
    {
        // Create and authenticate a test user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a fake image and store it
        $file = UploadedFile::fake()->image('test-image.jpg');
        $imagename = time() . '.' . $file->extension();
        $file->storeAs('images', $imagename, 'public');

        // Create a FotoGalerie record using a factory
        $fotoGalerie = FotoGalerie::factory()->create([
            'foto' => $imagename,
            'user_id' => $user->id,
        ]);

        // Send a DELETE request to destroy the image
        $response = $this->delete(route('destroy'), ['image_id' => $fotoGalerie->id]);

        // Assert that the file is deleted from the public folder
        $this->assertFalse(file_exists(public_path('images/' . $imagename)));

        // Assert that the record is deleted from the database
        $this->assertDatabaseMissing('foto_galeries', ['id' => $fotoGalerie->id]);

        // Assert the redirection with the success message
        $response->assertRedirect('admin/dashboard/image/create');
        $response->assertSessionHas('success', 'Image deleted successfully');
    }

    /** @test */
    public function Destroy_image_failed()
    {
        // Create and authenticate a test user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a FotoGalerie record using a factory
        $fotoGalerie = FotoGalerie::factory()->create();

        // Send a DELETE request with an invalid image_id 
        $response = $this->delete(route('destroy'), ['image_id' => 999]);  // 999 doesn't exist

        // Assert that the database still contains the image 
        $this->assertDatabaseCount('foto_galeries', 1);

        // Assert the redirection
        $response->assertRedirect('admin/dashboard/image/create');

        // Assert that the error message is set in the session
        $response->assertSessionHasErrors();
        $this->assertTrue(session()->has('errors'));
        $this->assertTrue(session()->has('errors'));
    }



    private function actingAsTestUser()
    {
        // Create a test user with a unique email
        $user = User::factory()->create([
            'email' => fake()->unique()->safeEmail(),
        ]);
        $this->actingAs($user);

        return $user;
    }
}