<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Menu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        $menu = Menu::inRandomOrder()->first() ?? Menu::factory()->create();
        $qty = $this->faker->numberBetween(1, 3);
        $itemPrice = $menu->price;

        return [
            'order_id' => Order::inRandomOrder()->first()->id ?? Order::factory(),
            'menu_id' => $menu->id,
            'quantity' => $qty,
            'item_price' => $itemPrice,
            'line_total' => $qty * $itemPrice,
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}
