<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', "MeuControlador@produtos");

Route::get('/nome', "MeuControlador@getNome");

Route::get('/idade', "MeuControlador@getIdade");

Route::get('/multiplicar/{n1}/{n2}', "MeuControlador@multiplicar");


Route::resource('cliente', 'ClienteControlador');


Route::get('/bootstrap', function(){

    return view('outros.exemplo');

});