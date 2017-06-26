<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

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

</body>

</html>