@extends('layout.mainlayout')
    @section('content')
        <h1>{{$grupo->nome}}</h1>
        {{$grupo}}
        @if(isset($grupo->conviteResposta))
            @if($grupo->conviteResposta)
                <div class="alert alert-success">
                    Convite enviado com sucesso
                </div>
            @else
                <div class="alert alert-danger">
                    Usuário já convidado
                </div>
            @endif
        @endif
        <ul>
            <li>
                @if($grupo->classificacao == null)
                    Não possui
                @else
                    {{$grupo->classificacao}}
                @endif
            </li>
        </ul>

        <a href="{{action('GruposController@alterar',$grupo->id)}}">
            Alterar
        </a>

        <a href="{{action('GruposController@convidarUsuario',$grupo->id)}}">
            Convidar Membros
        </a>
    @stop