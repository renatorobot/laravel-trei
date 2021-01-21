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

Route::get('/rotacomregras/{nome}/{n}', function($nome, $n) {
    
    for($i=0; $i<$n; $i++){

        echo "olá! Seja bem vindo, $nome <br>" ;

    }
    
})->where('nome', '[a-zA-Z]+')->where('n', '[0-9]+');



Route::prefix('/aplicacao')->group(function(){

    Route::get('/', function() {
    
       return view('app');
        
    })->name('app');

    Route::get('/user', function() {
    
        return view('user');
         
     })->name('app-user');


     Route::get('/profile', function() {
    
        return view('profile');
         
     })->name('app-profile');


});


Route::get('/produtos', function() {
    
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";

 })->name('meusprodutos');