<?php

namespace Database\Seeders;

use App\Models\Universidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Universidades::create([
            'nombre' => 'UNAM'
        ]);
        Universidades::create([
            'nombre' => 'IPN'
        ]);
        Universidades::create([
            'nombre' => 'UANL'
        ]);
        Universidades::create([
            'nombre' => 'UEDG'
        ]);
        Universidades::create([
            'nombre' => 'UASLP'
        ]);
    }
}
