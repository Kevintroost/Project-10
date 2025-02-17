<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use App\Models\EventRequest;
use App\Models\User;
use App\Models\FotoGalerie;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        // Event::factory(30)->create();
        EventRequest::factory(20)->create();
        FotoGalerie::factory(10)->create();
        ContactForm::factory(100)->create();
        Review::factory(10)->create();



       
    }
}
