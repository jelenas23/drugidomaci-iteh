<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboratorija;

class LaboratorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratorija::factory()->count(22)->create();
    }
}
