<?php

// Rotas GET

Route::get('/', function(){
    return 'Rota padrão laravel';
});


Route::get('/usuarios', 'UsuariosController@index');
Route::get('/usuarios/show/{id}', 'UsuariosController@find');
Route::get('/usuarios/novo', 'UsuariosController@novo');
Route::get('/usuarios/delete/{id}', 'UsuariosController@delete');
Route::get('/usuarios/alterar/{id}', 'UsuariosController@alterar');
//-----

//Rotas POST
Route::post('/usuarios/insert', 'UsuariosController@insert');
Route::post('/usuarios/update/{id}', 'UsuariosController@update');
//----- 