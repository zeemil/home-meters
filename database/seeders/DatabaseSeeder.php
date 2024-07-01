<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Meter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Location::factory()
        ->has(Meter::factory()->count(3))
        ->count(10)->create();
    }
}
