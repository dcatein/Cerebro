@extends('layout.mainlayout')
    @section('content')
        <div class="row">
            <p class='h1'>Grupos</p>
            <a href="{{action('GruposController@novo')}}" type="button" class="btn btn-success btn-sm">Novo</a>
        </div>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Grupo adicionado com sucesso</strong>
        </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <td><strong>Nome</strong></td>
                    <td><strong>Classificação</strong></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            @foreach($grupos as $grupo)
            <tr>
                <td>{{$grupo->nome}}</td>
                <td>
                    @if($grupo->classificacao == null)
                        Não possui
                    @else
                        {{$grupo->classificacao}}
                    @endif
                </td>
                <td>
                    <a href="{{action('GruposController@find',$grupo->id)}}">
                        detalhes
                    </a>
                </td>
                <td>
                    <a href="{{action('GruposController@delete',$grupo->id)}}">
                        deletar
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    @stop
    