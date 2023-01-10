<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Izvestaj;

class IzvestajSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Izvestaj::factory()->count(20)->create();
    }
}
