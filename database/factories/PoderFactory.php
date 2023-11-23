<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\poder>
 */
class PoderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $poder = $this->faker->unique()->randomElement([
            'telequinesia',
            'Super fuerza',
            'Proyección de energía',
            'Vuelo',
            'Invisibilidad',
            'Manipulación del tiempo',
            'Telepatía',
            'Factor de curación',
            'control elemental',
            'Deformación de la realidad',
        ]);
        return [
            'superpoder' => $poder
        ];
    }
}
