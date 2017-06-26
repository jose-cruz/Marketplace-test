@extends('layout')

@section('content')
<div>
    <h1>Producto Nuevo</h1>
</div>
<div>
<form Method ='POST' Action ='/productos'>
    {{ csrf_field() }}
    Nombre del Producto:<br>
    <input type="text" name="nombre"><br>
    Peso del Producto:<br>
    <input type="text" name="peso"><br>
    Valor del Producto:<br>
    <input type="text" name="valor"><br>
    Cantidad:<br>
    <input type="text" name="stock"><br><br>

    <input type="submit" value="Submit">
</form>
</div>

@endsection