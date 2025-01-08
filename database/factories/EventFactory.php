<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

class EventFactory extends Factory
{
    protected $model = Event::class; // Corrected to match your model's class name

    public function definition(): array
    {
        $event_name = [
            'Slipknot',
            'Metallica',
            'Iron Maiden',
            'Rammstein',
            'Kiss',
            'AC/DC',
            'Guns N Roses',
            'Queen',
            'Led Zeppelin',
        ];

        $event_date = [
            '24 december 2025',
            '25 december 2025',
            '26 december 2025',
            '27 december 2025',
            '28 december 2025',
            '29 december 2025',
            '30 december 2025',
            '31 december 2025',
        ];

        $event_picture = [
            'seeder.jpg',
            'seeder2.jpg',
            'seeder3.jpg',
            'seeder4.jpg',
            'seeder5.jpg',
            
        ];

        return [
            'event_name' => $this->faker->randomElement($event_name),
            'event_date' => $this->faker->randomElement($event_date),
            'Location' => $this->faker->city,
            'event_type' => $this->faker->randomElement(['Concert', 'Festival', 'Theater']),
            'description' => $this->faker->text,
            'ticket_link' => $this->faker->url,
            'event_picture' => $this->faker->randomElement(array: $event_picture),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}


