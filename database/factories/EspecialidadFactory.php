<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Especialidad;

class EspecialidadFactory extends Factory
{
    protected $model = Especialidad::class;

    public function definition()
    {
        return [
            'nombre_especialidad' => $this->faker->word,
        ];
    }
}
