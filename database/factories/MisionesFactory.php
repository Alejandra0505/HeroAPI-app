<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\misiones>
 */
class MisionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $misiones = $this->faker->randomElement([
            'Activa',
            'Desactiva',
        ]);
        return [
            'estado'=> $misiones,

            'tipomision_id'=> function () {
                return \App\Models\tipomision::factory()->create()->id;
            },
        ];
    }
}
