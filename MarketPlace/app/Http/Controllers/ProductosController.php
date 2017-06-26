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

    public function create(){

        return view('productos.create');

}

    public function store(){

        Producto::create(request(['nombre', 'peso', 'valor', 'stock']));

        return redirect('/productos');

    }

}
