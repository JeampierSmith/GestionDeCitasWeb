<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clinica;

class ClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Clinica::factory()
            ->count(30)
            ->create();
    }
}
