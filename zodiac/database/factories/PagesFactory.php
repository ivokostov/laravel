<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pages>
 */
class PagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title();
        $slug = $title;    
        return [
            'title' => $title,
            'content' => fake()->paragraph(20),
            'slug' => $slug,
            'status' => 1,
        ];
    }
}
