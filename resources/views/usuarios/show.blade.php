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

        <div>
            Convites:

            <table class="table">
            <thead>
                <tr>
                    <td>Grupo</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            @foreach ($usuario->convites as $convite)
            <tr>
                <td>{{$convite->grupo}}</td>
                <td>
                    <a href="{{action('ConvitesController@aceitarConvite',$convite->id)}}">
                        Aceitar
                    </a>
                </td>
                <td>
                    <a href="{{action('ConvitesController@recusarConvite',$convite->id)}}">
                        recusar
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
    @stop