<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ruc_emp' => $this->faker->numberBetween($min = 100000000, $max = 999999999),
            'nombre_emp' => $this->faker->name(),
            'sector_emp' => $this->faker->text(),
            'numero_emp' => $this->faker->numberBetween($min = 900000000, $max = 999999999),
            'direccion_emp' => $this->faker->address(),
            'mision_emp' => $this->faker->text(),
            'vision_emp' => $this->faker->text(),
            'id_reg' => '',
            'id_pry' => '',
            'id_usr' => '',
            'id_hro' => '',
        ];
    }
}
