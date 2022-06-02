<?php

namespace Database\Seeders;

use App\Models\cursos;
use App\Models\Universidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     cursos::create(['nombre' => 'semestral']);
     cursos::create(['nombre' => 'anual']);
     cursos::create(['nombre' => 'semi-intensivo']);
    }
}
