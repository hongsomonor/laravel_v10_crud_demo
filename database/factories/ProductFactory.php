<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_name" => $this->faker->text(50),
            "quantity" => $this->faker->numberBetween(5, 30),
            "price" => $this->faker->numberBetween(5, 60),
            "description" => $this->faker->text(50),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
