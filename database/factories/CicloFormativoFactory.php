<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CicloFormativo>
 */
class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'familia_profesional_id' => fake()->numberBetween(1, 26),
            'nombre' => fake()->name(255),
            'codigo' => fake()->text(50),
            'grado' => fake()->randomElement(['básico', 'medio', 'superior']),
            'descripcion' => fake()->text(150)
        ];
    }
}
