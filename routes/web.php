<?php

Route::get('/', function () {
    return view('welcome');
});



Route::get('/teste', function() {
    
    return "olá!"; 

});



Route::get('/nome/{nome}/{sobrenome}', function($nome, $sobrenome) {
    
    echo "olá! Seja bem vindo, $nome  $sobrenome " ;

});
