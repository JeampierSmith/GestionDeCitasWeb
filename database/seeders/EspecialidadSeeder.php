<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;
class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Especialidad::factory()
            ->count(7)
            ->create();
    }
}
