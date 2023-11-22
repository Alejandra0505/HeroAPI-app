<?php

namespace Database\Seeders;

use App\Models\poderh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoderhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        poderh::factory()->count(1)->create();
    }
}
