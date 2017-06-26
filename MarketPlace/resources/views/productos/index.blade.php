<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

    @foreach($productos as $producto)

        <li>

            <a href="/productos/ {{ $producto->id  }}">

                {{ $producto->nombre }}

            </a>

        </li>

    @endforeach






    <h1><a href="/producto/create/">Poducto nuevo</a></h1>

</body>

</html>
