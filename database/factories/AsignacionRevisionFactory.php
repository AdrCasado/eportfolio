<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AsignacionRevision>
 */
class AsignacionRevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id' => fake()->numberBetween(1, 80),
            'revisor_id' => fake()->numberBetween(1, 11),
            'asignado_por_id' => fake()->numberBetween(1, 11),
            'fecha_limite' => fake()->dateTime(),
            'estado' => fake()->randomElement(['pendiente', 'en_proceso', 'completada'])
        ];
    }
}
