<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipomision>
 */
class TipomisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tmision = $this->faker->randomElement([
            "MR (Misiones Rutinarias)",
            "MSU (Misiones para Salvar el Universo)",
        ]);
        return [
            "tmision"=> $tmision,
        ];
    }
}
