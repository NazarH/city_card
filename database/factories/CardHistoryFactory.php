<?php

namespace Database\Factories;

use App\Models\CardHistory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardHistory>
 */
class CardHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = CardHistory::class;

    public function definition(): array
    {
        return [
            'user_id' => rand(1,6),
            'card_id' => rand(1,4),
            'costs_date' => Carbon::now()->subDays(rand(1, 100))
        ];
    }
}
