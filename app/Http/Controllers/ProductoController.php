<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function saludo(){
        $nombre = "Carlos";

        $productos = Producto::all();


        return view('pages.productos', compact('nombre', 'productos'));
    }
}
