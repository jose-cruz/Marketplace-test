@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Productos Disponibles</h1>
        </div>

        <div>
            @foreach($productos as $producto)

                <li>

                    <a href="/productos/ {{ $producto->id  }}">

                        {{ $producto->nombre }}

                    </a>

                </li>

            @endforeach
        </div>
        <div>
            <br>
            <h2>Desea postear un producto?</h2>
            <h3><a href="/producto/create/">Ingresar producto nuevo!</a></h3>
        </div>
    </div>
@endsection

