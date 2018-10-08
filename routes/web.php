<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return 'Rota padrão laravel';
});


Route::get('/usuarios', 'UsuariosController@index');

Route::get('/usuarios/show/{id}', 'UsuariosController@find');
