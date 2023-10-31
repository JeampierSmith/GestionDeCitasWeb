<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Clinica;
class ClinicaFactory extends Factory
{


    public function definition()
    {
        return [
            'nombre_clinica' =>fake()->company(),
            'direccion' => fake()->address(),
            'telefono' => fake()->phoneNumber(),
            'hora_apertura' => fake()->time('H:i', '08:00'),
            'hora_cierre' => fake()->time('H:i', '18:00'),
        ];

    }

}
