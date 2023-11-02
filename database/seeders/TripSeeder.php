<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TripHistory;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        TripHistory::factory(10)->create();
    }
}
