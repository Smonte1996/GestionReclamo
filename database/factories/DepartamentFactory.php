<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departament>
 */
class DepartamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->randomElement(['RRHH','Administración','Operaciones','Maquila','Estibas','TI','Gerencia','Archivo','Contabilidad']);
        return [
            'name' => $name
        ];
    }
}
