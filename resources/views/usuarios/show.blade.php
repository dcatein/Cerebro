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
            <li>
            @switch($usuario->tipo)
                @case(0)
                    Aluno
                    @break

                @case(1)
                    Professor
                    @break

                @case(2)    
                    Administrador
                    @break

                @default
                    Tipo Incorreto
            @endswitch
            </li>
        </ul>

        <a href="{{action('UsuariosController@alterar',$usuario->id)}}">
            Alterar
        </a>
    @stop