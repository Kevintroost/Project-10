<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\FotoGalerie;
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
        Event::factory(0)->create();
        FotoGalerie::factory(200)->create();


       
    }
}
