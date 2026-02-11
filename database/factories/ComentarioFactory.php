<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id' => fake()->numberBetween(1, 30),
            'user_id' => fake()->numberBetween(1, 11),
            'comentario' => fake()->text(30),
            'tipo' => fake()->randomElement(['profesor', 'estudiante'])
        ];
    }
}
