<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FotoGalerie>
 */
class FotoGalerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'seeder.jpg',
            'seeder2.jpg',
            'seeder3.png',
            'seeder4.jpg',
            'seeder5.jpg',
            'seeder6.jpg',
            'seeder7.png',
        ];

        return [
            'foto' => $this->faker->randomElement(array: $images),
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),	
        ];
    }
}
