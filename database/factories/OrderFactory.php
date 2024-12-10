<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vocher_no'=> $this->faker->ean8,
            'total'=> rand(3,100),
            'qty'=> rand(3,20),
            'payment_slip'=> $this->faker->imageUrl,
            'status'=>$this->faker->word,
            'note'=>$this->faker->paragraph,
            'item_id'=>rand(1,10),
            'payment_id'=>rand(1,20),
            'user_id'=>rand(1,2)
        ];
    }
}
