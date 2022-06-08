<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Universidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(ProductosSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(UniversidadesSeeder::class);
        $this->call(FormularioGeneralSeeder::class);
    }
}
