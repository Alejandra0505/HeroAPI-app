<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Hero = new Hero;
        $Hero->hero_id = 1;
        $Hero->hero_nombre = "";
        $Hero->hero_nombrereal = "";
        $Hero->hero_imagenperfil = "";
        $Hero->hero_images= "";
        $Hero->hero_studioanimacion = "";
        $Hero->hero_description = "";
        $Hero->hero_origen = "";
        $Hero->hero_añodebut = "";
        $Hero->save();
    }
}
