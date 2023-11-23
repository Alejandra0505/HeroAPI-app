<?php

namespace Database\Seeders;

use App\Models\misiones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        misiones::factory()->count(5)->create();
    }
}
