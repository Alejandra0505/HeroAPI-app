<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\grupo>
 */
class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {
        $grupo = $this->faker->randomElement([
            'Los Vengadores',
            'S.H.I.E.L.D',
            'Hydra',
            'Guardianes de la galaxia',
            'Black Order',
            'Chitauri',
            'Ejercito de ultron',
            'Nova Corps',
            'Control de daños',
        ]);
        return [
            'nombre' => $grupo,
        ];
    }
}
