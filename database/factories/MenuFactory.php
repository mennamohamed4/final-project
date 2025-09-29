<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 5, 80),
            'image' => null,
            'category' => $this->faker->randomElement(['appetizer', 'main', 'drink', 'dessert']),
            'available' => true,
            'stock' => $this->faker->numberBetween(0, 50),
        ];
    }
}
