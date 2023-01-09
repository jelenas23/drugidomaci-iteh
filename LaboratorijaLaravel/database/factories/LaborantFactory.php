<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Laboratorija;

class LaborantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'pol' => $this->faker->randomElement($array = array ('M','Z')) ,
            'email' => $this->faker->unique()->email(),
            'laboratorija_id' => Laboratorija::factory()
        ];

    }
}
