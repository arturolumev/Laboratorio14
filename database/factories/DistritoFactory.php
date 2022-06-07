<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_dst' => $this->faker->city(),
            'id_prv' => '',
            'id_reg' => '',
        ];
    }
}
