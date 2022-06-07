<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_usr' => $this->faker->name(),
            'apellido_usr' => $this->faker->lastName(),
            'email_usr' => $this->faker->email(),
            'tipo_usr' => $this->faker->text(), // QUE TIPO SERA?
        ];
    }
}
