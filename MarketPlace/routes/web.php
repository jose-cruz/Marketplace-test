<?php


Route::get('/productos', 'ProductosController@index');

Route::get('/productos/{producto}', 'ProductosController@show');

Route::get('producto/create', 'ProductosController@create');

//Route::get('submitForm', 'ProductosController@submitForm');

Route::post('/productos', 'ProductosController@store');


Route::get('/', function () {

    return view('welcome');

});


