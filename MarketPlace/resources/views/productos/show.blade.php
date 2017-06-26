@extends('layout')

@section('content')
    <div>
        <h1>{{ $producto->nombre }}</h1>
        <h2>Precio: {{ $producto->precioTotal($producto) }}</h2>
        <h2>Seguro: {{ $producto->seguro($producto) }}</h2>
        <h3>Stock: {{ $producto->stock }}</h3>
        <h3>Peso: {{ $producto->peso }}</h3>
    </div>

    <div>
        <br>
        <br>
        <h2><a href="/productos/">Regresar a Productos</a></h2>
    </div>

@endsection