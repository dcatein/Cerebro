@extends('layout.mainlayout')
    @section('content')
        <div class="row">
            <p class='h1'>Envios</p>
            <a href="{{action('EnviosController@novo')}}" type="button" class="btn btn-success btn-sm">Novo</a>
        </div>
    @if(old('assunto'))
        <div class="alert alert-success">
            <strong>Envio adicionado com sucesso</strong>
        </div>
    @endif
        <table class="table">
            @foreach ($envios as $envio)
            <tr>
                <td>{{$envio->assunto}}</td>
                <td>{{$envio->tipo}}</td>
                <td>{{$envio->info}}</td>
                <td>{{$envio->classificacao}}</td>
                <td>
                    <a href="{{action('EnviosController@find',$envio->id)}}">
                        detalhes
                    </a>
                </td>
                <td>
                    <a href="{{action('EnviosController@delete',$envio->id)}}">
                        deletar
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    @stop
    