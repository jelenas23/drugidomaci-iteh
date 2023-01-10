<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LaboratorijaSeeder;
use Database\Seeders\LaborantSeeder;
use Database\Seeders\IzvestajSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ls = new LaboratorijaSeeder();
        $la = new LaborantSeeder();
        $is = new IzvestajSeeder();

        $ls->run();
        $la->run();
        $is->run();

    }
}
