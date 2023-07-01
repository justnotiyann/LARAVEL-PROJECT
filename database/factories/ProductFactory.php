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
            'nama_product' => $this->faker->words(2, true),
            'jenis_product' => $this->faker->word(),
            'quantity' => $this->faker->randomNumber(2),
            'harga' => $this->faker->randomNumber(5, true),
        ];
    }
}
