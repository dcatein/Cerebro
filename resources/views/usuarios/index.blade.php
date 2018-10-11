@extends('layout.mainlayout')
    @section('content')
        <div class="row">
            <p class='h1'>Usuários</p>
            <a href="{{action('UsuariosController@novo')}}" type="button" class="btn btn-success btn-sm">Novo</a>
        </div>
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Usuário adicionado com sucesso</strong>
        </div>
    @endif
        <table class="table">
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <a href="{{action('UsuariosController@find',$usuario->id)}}">
                        detalhes
                    </a>
                </td>
                <td>
                    <a href="{{action('UsuariosController@delete',$usuario->id)}}">
                        deletar
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    @stop
    