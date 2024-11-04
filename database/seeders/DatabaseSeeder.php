<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pizza;
use App\Models\Restaurant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Pizza::factory(10)->create();
        Restaurant::factory(10)->create();
    }
}
