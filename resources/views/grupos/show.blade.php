@extends('layout.mainlayout')
    @section('content')
        <h1>{{$grupo->nome}}</h1>
        <ul>
            <li>
                @if($grupo->classificacao == null)
                    Não possui
                @else{
                    {{$grupo->classificacao}}
                }
                @endif
            </li>
        </ul>

        <a href="{{action('GruposController@alterar',$grupo->id)}}">
            Alterar
        </a>
    @stop