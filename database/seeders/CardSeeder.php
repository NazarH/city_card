<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CardHistory;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CardHistory::factory(10)->create();
    }
}
