@extends('layout.mainlayout')
    @section('content')
        <h1>{{$usuario->nome}}</h1>
        <ul>
            <li>
                {{$usuario->idade}}
            </li>
            <li>
                {{$usuario->email}}
            </li>
        </ul>

        <a href="{{action('UsuariosController@alterar',$usuario->id)}}">
            Alterar
        </a>
    @stop