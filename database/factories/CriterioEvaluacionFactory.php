<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CriterioEvaluacion>
 */
class CriterioEvaluacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resultado_aprendizaje_id' => fake()->numberBetween(1, 20),
            'codigo' => fake()->text(1),
            'descripcion' => fake()->text(50),
            'peso_porcentaje' => fake()->numberBetween(1, 100),
            'orden' => fake()->numberBetween(1, 30)
        ];
    }
}
