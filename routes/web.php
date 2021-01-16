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


Route::get('/seunome/{nome?}', function($nome=null) {
    
    if(isset($nome))

        echo "olá! Seja bem vindo, $nome" ;
        
    else 
    
        echo "vc não digitou nenhum nome";
});