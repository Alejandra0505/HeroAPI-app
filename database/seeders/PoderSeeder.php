<?php

namespace Database\Seeders;

use App\Models\poder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        poder::factory()->count(1)->create();
    }
}
