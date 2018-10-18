<?php

Route::get('/index', function () {
     return view('index');
 });

Route::get('/', function(){
    return 'Rota padrão laravel';
});


Route::get('/usuarios', 'UsuariosController@index');

Route::get('/usuarios/show/{id}', 'UsuariosController@find');
