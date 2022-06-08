<?php

namespace Database\Seeders;

use App\Models\formulario_general;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormularioGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        formulario_general::create([
            'universidad_id' => 1,
            'dp_nombre' => 'pedro',
            'dp_edad' => 24,
            'dp_email' => 'pedro@gmail.com',
            'curso_id' => 2
        ]);
        formulario_general::create([
            'universidad_id' => 2,
            'dp_nombre' => 'Juan',
            'dp_edad' => 22,
            'dp_email' => 'juan@gmail.com',
            'curso_id' => 2
        ]);
        formulario_general::create([
            'universidad_id' => 1,
            'dp_nombre' => 'Sofia',
            'dp_edad' => 18,
            'dp_email' => 'sofia@gmail.com',
            'curso_id' => 3
        ]);
        formulario_general::create([
            'universidad_id' => 1,
            'dp_nombre' => 'Arturo',
            'dp_edad' => 20,
            'dp_email' => 'Arturo@gmail.com',
            'curso_id' => 3
        ]);
        formulario_general::create([
            'universidad_id' => 1,
            'dp_nombre' => 'Paula',
            'dp_edad' => 21,
            'dp_email' => 'paula@gmail.com',
            'curso_id' => 2
        ]);
        formulario_general::create([
            'universidad_id' => 4,
            'dp_nombre' => 'Roberto',
            'dp_edad' => 24,
            'dp_email' => 'rober@gmail.com',
            'curso_id' => 1
        ]);
        formulario_general::create([
            'universidad_id' => 5,
            'dp_nombre' => 'Mario',
            'dp_edad' => 17,
            'dp_email' => 'mario@gmail.com',
            'curso_id' => 3
        ]);
        formulario_general::create([
            'universidad_id' => 3,
            'dp_nombre' => 'Maria',
            'dp_edad' => 24,
            'dp_email' => 'maria@gmail.com',
            'curso_id' => 2
        ]);
        formulario_general::create([
            'universidad_id' => 2,
            'dp_nombre' => 'saul',
            'dp_edad' => 20,
            'dp_email' => 'saul@gmail.com',
            'curso_id' => 1
        ]);
        formulario_general::create([
            'universidad_id' => 4,
            'dp_nombre' => 'Jovany',
            'dp_edad' => 19 ,
            'dp_email' => 'Eljobas@gmail.com',
            'curso_id' => 3
        ]);
    }
}
