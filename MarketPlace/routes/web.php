<?php


Route::get('/productos', 'ProductosController@index');

Route::get('/productos/{producto}', 'ProductosController@show');


Route::get('/', function () {

    return view('welcome');

});
