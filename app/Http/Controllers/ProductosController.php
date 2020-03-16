<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function getProductos()
    {
        return Producto::all();
        
    }
}
