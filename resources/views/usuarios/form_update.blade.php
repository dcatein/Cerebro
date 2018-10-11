@extends('layout.mainlayout')
    @section('content')

    <h1>Usuários</h1>

    <form action="/usuarios/update/{{$usuario->id}}" method="post">

        <input type="hidden" 
            name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{$usuario->nome}}"/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{$usuario->email}}"/>
        </div>
        <div class="form-group">
            <label>Idade</label>
            <input name="idade" class="form-control" value="{{$usuario->idade}}"/>
        </div>
        
        <div class="form-group">
            <label>Senha</label>
            <input name="senha" class="form-control" value="{{$usuario->senha}}"/>
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
    </form>
    @stop