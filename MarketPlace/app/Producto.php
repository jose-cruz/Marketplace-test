<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public static function precioTotal(Producto $producto){

        $costoEnvio = 3.55;
        $valorProducto =  $producto->valor;
        $pesoProducto =  $producto->peso;
        
        $precioTotal = $costoEnvio*$pesoProducto;
        $precioTotal = $precioTotal + $valorProducto;
        $precioTotal = $precioTotal + $precioTotal*0.12;

        return $precioTotal;

    }

    public static function seguro(Producto $producto){

        $valorProducto = $producto->valor;

        $seguro = 0.07*$valorProducto;

        return $seguro;

    }


}
