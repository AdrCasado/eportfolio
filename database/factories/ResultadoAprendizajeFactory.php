<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResultadoAprendizaje>
 */
class ResultadoAprendizajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modulo_formativo_id' => fake()->numberBetween(1, 20),
            'codigo' => fake()->text(50),
            'peso_procentaje' => fake()->numberBetween(1, 100),
            'orden' => fake()->numberBetween(1, 20),
            'descripcion' => fake()->text(50)
        ];
    }
}
