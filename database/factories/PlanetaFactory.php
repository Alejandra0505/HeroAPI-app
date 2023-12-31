<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planeta>
 */
class PlanetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $planeta = $this->faker->randomElement([
            'Jupiter',
            'Saturno',
            'Neptuno',
            'Pluton',
            'Marte',
            'Venus',
            'Luna',
        ]);
        return [
            'nombrePlaneta' => $planeta,
        ];
    }
}
