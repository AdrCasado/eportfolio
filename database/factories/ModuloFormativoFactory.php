<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModuloFormativo>
 */
class ModuloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ciclo_formativo_id' => fake()->numberBetween(1, 207),
            'nombre' => fake()->name(255),
            'codigo' => fake()->text(50),
            'horas_totales' => fake()->randomNumber(3, false),
            'curso_escolar' => fake()->text(255),
            'centro' => fake()->text(255),
            'docente_id' => fake()->numberBetween(1, 11),
            'descripcion' => fake()->text(255)
        ];
    }
}
