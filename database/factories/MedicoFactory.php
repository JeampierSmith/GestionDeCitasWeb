<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Medico;


class MedicoFactory extends Factory
{
    protected $model = Medico::class;

    public function definition()
    {
        return [
            'nombre_medico' => $this->faker->firstName,
            'apellido_medico' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'especialidad_id' => \App\Models\Especialidad::factory(),
            'clinica_id' => \App\Models\Clinica::factory(),
            'user_id'=>1
        ];
    }
}
