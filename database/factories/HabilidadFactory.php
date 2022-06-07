<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabilidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_hbd' => $this->faker->text(),
            'nivel_hbd' => $this->faker->text(),
        ];
    }
}
