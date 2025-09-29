<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'status' => $this->faker->randomElement(['pending','preparing','ready','delivered']),
            'tax' => 0,
            'delivery_fee' => $this->faker->randomFloat(2, 0, 10),
            'total_amount' => 0,
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}
