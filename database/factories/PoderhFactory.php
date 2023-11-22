<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\poderh>
 */
class PoderhFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nivel = $this->faker->randomElement ([
            'Nivel 1',
            'Nivel 2',
            'Nivel 3',
            'Nivel 4',
            'Nivel 5',
            'Nivel 6',
            'Nivel 7',
            'Nivel 8',
            'Nivel 9',
            'Nivel 10',
        ]);
        return [
            'nivel'=> $nivel,
            'hero_id'=> function () {
                return \App\Models\Hero::factory()->create()->id;
            },
            'poder_id' => function () {
                return \App\Models\poder::factory()->create()->id;
            }
        ];
    }
}
