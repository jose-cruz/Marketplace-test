<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{

    public function index(){

        $productos = Producto::all();

        return view('productos.index', compact('productos'));

    }

    public function show(Producto $producto){

        return view('productos.show', compact('producto'));

    }

}
