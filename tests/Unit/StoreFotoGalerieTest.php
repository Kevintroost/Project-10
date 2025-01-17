<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Carbon\Carbon;

class StoreFotoGalerieTest extends TestCase
{
    /** @test */
    public function Store_Image_Successfully()
    {
        // Make sure the directory exists and is writable
        $directory = public_path('images');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777, true);
        }

        // Create a fake image file
        $file = UploadedFile::fake()->image('test-image.jpg');

        // Create and authenticate a test user
        $user = $this->actingAsTestUser();

        Carbon::setTestNow(Carbon::create(2024, 12, 19, 12, 0, 0));

        // Data to store the image
        $data = [
            'image' => $file,
        ];

        // Generate the custom image name based on timestamp
        $imagename = time() . '.' . $file->extension();

        // Make the request to store the image 
        $response = $this->post(route('store'), $data);

        // Assertions
        $this->assertTrue(file_exists(public_path('images/' . $imagename)), 'File was not saved in public/images.');

        $this->assertDatabaseHas('foto_galeries', [
            'foto' => $imagename,
            'user_id' => $user->id,
        ]);

        $response->assertRedirect('admin/dashboard/image/create');
        $response->assertSessionHas('success', 'Image uploaded successfully');

        // Clean up the test image file
        unlink(public_path('images/' . $imagename));

        // Reset mocked time 
        Carbon::setTestNow(null);
    }

    /** @test */
    public function Store_Image_Failed()
    {
        // Create and authenticate a test user
        $this->actingAsTestUser();

        // Test sending no file (null or empty input)
        $data = [
            'image' => null,
        ];

        // Make the request to store the image
        $response = $this->post(route('store'), $data);

        // Assertions
        $response->assertSessionHasErrors('image');
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



