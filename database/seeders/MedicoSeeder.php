<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medico;
class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Medico::factory()
            ->count(30)
            ->create();
    }
}
