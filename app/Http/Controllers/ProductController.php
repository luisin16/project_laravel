<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = [
            ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 10.99, 'cantidad' => 5],
            ['id' => 2, 'nombre' => 'Producto 2', 'precio' => 20.49, 'cantidad' => 3],
            ['id' => 3, 'nombre' => 'Producto 3', 'precio' => 15.75, 'cantidad' => 8],
        ];

        return view('layouts.products', compact('productos'));
    }
}
