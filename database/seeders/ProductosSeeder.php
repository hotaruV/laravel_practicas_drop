<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            "nombre" => "Cocacola",
            "descripcion" => "Todos los productos que vienen de cocacola",
            "f_caducidad" => now()
        ]);
    }
}
