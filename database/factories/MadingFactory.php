<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mading>
 */
class MadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Programming', 'Personal', 'Mading'];

        return [
            'title' => $this->faker->words(5, true),
            'excerpt' => $this->faker->paragraph(2),
            'category' => $this->faker->randomElement($categories),
            'body' => $this->faker->text(1000),
            'author' => $this->faker->firstName(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
