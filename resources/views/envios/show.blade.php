@extends('layout.mainlayout')
    @section('content')
        <h1>{{$envio['envio']->assunto}}</h1>
        <ul>
            <li>
                {{$envio['envio']->tipo}}
            </li>
            <li>
                {{$envio['envio']->info}}
            </li>
            <li>
                {{$envio['envio']->classificacao}}
            </li>
            <p>Palavras-Chave:</p>
            @foreach ($envio['palavras'] as $palavra)
                {{$palavra->palavra}}
            @endforeach
        </ul>

        <a href="{{action('EnviosController@alterar',$envio['envio']->id)}}">
            Alterar
        </a>
    @stop
