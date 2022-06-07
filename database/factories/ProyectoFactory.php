<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo_pry' => $this->faker->text(),
            'descripcion_pry' => $this->faker->text(),
            'requisitos_pry' => $this->faker->text(),
            'pago_pry' => $this->faker->numerify(),
            'vacantes_pry' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'id_hro' => '',
        ];
    }
}
