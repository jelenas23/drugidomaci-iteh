<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Laborant;

class IzvestajFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'pacijent' => $this->faker->name(),
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'komentar' => $this->faker->text($maxNbChars = 50),
            'laborant_id' => Laborant::factory()     
    
        ];
    }
}
