<?php

// Rotas GET

    //Index
Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');
    //perfil
Route::get('/perfil', 'PerfilController@index');
  //login
Route::get('/login', 'LoginController@index');
Route::get('/login/entrar', 'LoginController@entrar');

//plano de estudos
Route::get('/plano', 'PlanosController@index');

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
Route::get('/envios/detalhes/{id}', 'EnviosController@detalhes');

    // Grupos
// Route::get('/grupos', function () {return view('grupo');});
Route::get('/grupos', 'GruposController@index');
Route::get('/grupos/show/{id}', 'GruposController@find');
Route::get('/grupos/show/comentario/{id}', 'ComentariosController@find');
Route::get('/grupos/novo', 'GruposController@novo');
Route::get('/grupos/delete/{id}', 'GruposController@delete');
Route::get('/grupos/alterar/{id}', 'GruposController@alterar');
Route::get('grupos/convite/{id}','GruposController@convidarUsuario');
Route::get('/grupos/filtra', 'GruposController@filter');

    //Convites
Route::get('/convites/aceitarConvite/{id}', 'ConvitesController@aceitarConvite');
Route::get('/convites/recusarConvite/{id}', 'ConvitesController@recusarConvite');
    
    //Comentarios
Route::get('/comentarios/delete/{id}', 'ComentariosController@delete');



    //Grupos_Usuarios
// Route::get('/grupos/usuarios/{id}', 'GruposController@cadastrarUsuario');
//-----

//Rotas POST

    // Usuarios
Route::post('/usuarios/insert', 'UsuariosController@insert');
Route::post('/usuarios/update/{id}', 'UsuariosController@update');

    // Envios
Route::post('/envios/insert', 'EnviosController@insert');
Route::post('/envios/update/{id}', 'EnviosController@update');
Route::post('/envios/postar/{grupo}', 'EnviosController@postar');

    // Grupos
Route::post('/grupos/insert', 'GruposController@insert');
Route::post('/grupos/update/{id}', 'GruposController@update');

    //Convites
Route::post('/convites/insert/{grupo}', 'ConvitesController@insert');

    //Comentarios
Route::post('/comentarios/comentar/{envio}', 'ComentariosController@comentar');

//login

//-----
