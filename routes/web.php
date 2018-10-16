<?php

// Rotas GET

Route::get('/', function(){
    return 'Rota padrão laravel';
});

    // Usuarios
Route::get('/usuarios', 'UsuariosController@index');
Route::get('/usuarios/show/{id}', 'UsuariosController@find');
Route::get('/usuarios/novo', 'UsuariosController@novo');
Route::get('/usuarios/delete/{id}', 'UsuariosController@delete');
Route::get('/usuarios/alterar/{id}', 'UsuariosController@alterar');

    // Envios
Route::get('/envios', 'EnviosController@index');
Route::get('/envios/show/{id}', 'EnviosController@find');
Route::get('/envios/novo', 'EnviosController@novo');
Route::get('/envios/delete/{id}', 'EnviosController@delete');
Route::get('/envios/alterar/{id}', 'EnviosController@alterar');
//-----

//Rotas POST

    // Usuarios
Route::post('/usuarios/insert', 'UsuariosController@insert');
Route::post('/usuarios/update/{id}', 'UsuariosController@update');

    // Envios
Route::post('/envios/insert', 'EnviosController@insert');
Route::post('/envios/update/{id}', 'EnviosController@update');

//----- 