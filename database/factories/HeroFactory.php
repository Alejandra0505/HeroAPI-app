<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {
        $nombre = $this->faker->randomElement([
            'Spiderman',
            'Iron-man',
            'Capitan America',
            'Hulk',
            'Thor',
            'Black Panter',
            'Doctor Strange',
            'Viuda negra',
            'Ant-man',
            'Falcon',
        ]);
        $nombrereal = $this->faker->randomElement([
            'Peter Parker',
            'Tony Stark',
            'Steve Rogers',
            'Bruce Banner',
            'Thor Odinson',
            'Rey TChalla',
            'Dr. Stephen Strange',
            'Natasha Romanoff ',
            'Scott Lang',
            'Sam Wilson',
        ]);
        $studio = $this->faker->randomElement([
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
            'Marvel',
        ]);
        $descripcion = $this->faker->randomElement([
            'El talentoso estudiante de secundaria Peter Parker',
            'No hay Vengadores sin Iron Man, y no hay Iron Man sin un Tony Stark',
            'Cuando se crea el primer Súper Soldado de América, hay que tener en cuenta, ante todo, el carácter del hombre.',
            '"Siempre enfadado" del científico Bruce Banner, Hulk.',
            'Emocional, y a menudo temperamental, Thor seguiría ayudando en la Tierra',
            'El príncipe TChalla se vio obligado no sólo a asumir el cargo de gobernante de Wakanda',
            'Doctor Strange, has llegado muy lejos.',
            'Natalia "Natasha" Romanoff, que en su día fue una agente enemiga del KGB',
            'Lang fue reclutado por el científico Hank Pym y se le pidió que se pusiera el viejo traje de Ant-Man',
            'Una vez que el ex paracaidista Sam Wilson se hizo rápidamente amigo de Steve Rogers, nunca se apartó de su lado.',
        ]);
        $añodebut = $this->faker->randomElement([
            '2002',
            '1968',
            '2011',
            '1962',
            '2011',
            '2018',
            '2016',
            '1964',
            '1979',
            '2021',
        ]);

        return [
            'nombre'=> $nombre,
            'nombrereal'=> $nombrereal,
            'studioanimacion'=> $studio,
            'descripcion'=> $descripcion,
            'añodebut'=> $añodebut,
            'planeta_id'=> function () {
                return \App\Models\Planeta::factory()->create()->id;
            },
            // "nombre"=> $this->faker->name(),
            // "nombrereal"=> $this->faker->name(),
            // "imagenperfil"=> $this->faker->image(),
            // "imagenes"=> $this->faker->image(),
            // "studioanimacion"=> $this->faker->text(5),
            // "descripcion"=> $this->faker->text(10),
            // "origen"=> $this->faker->text(5),
            // "añodebut"=> $this->faker->randomNumber(),
        ];
    }
}
