<?php

namespace Database\Factories;

use App\Models\TripHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TripHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = TripHistory::class;

    public function definition(): array
    {
        return [
            'user_id' => rand(1,6),
            'card_id' => rand(1,4),
            'transport_id' => random_int(1, 30)
        ];
    }
}
