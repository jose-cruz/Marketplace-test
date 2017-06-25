<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

<h1>{{ $producto->nombre }}</h1>
<h2>Precio: {{ $producto->precioTotal($producto) }}</h2>
<h2>Seguro: {{ $producto->seguro($producto) }}</h2>
<h3>Stock: {{ $producto->stock }}</h3>
<h3>Peso: {{ $producto->peso }}</h3>


</body>

</html>
