<?php

namespace Database\Seeders;

use App\Models\tipomision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipomisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipomision::factory()->count(1)->create();  
    }
}
