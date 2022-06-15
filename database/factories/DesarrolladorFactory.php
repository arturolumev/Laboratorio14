<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DesarrolladorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documento_dev' => $this->faker->numberBetween($min = 10000000, $max = 99999999),
            'numero_dev' => $this->faker->numberBetween($min = 900000000, $max = 999999999),
            'fechanac_dev' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'archivo_dev' => $this->faker->text(),
            'experiencialab_dev' => $this->faker->text(),

            //revisar si asi esta bien
            'id_hbd' => '',
            'id_usr' => '',
            'id_reg' => '',
        ];
    }
}
