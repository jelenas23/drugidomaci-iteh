<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laborant;

class LaborantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laborant::factory()->count(33)->create();
    }
}
