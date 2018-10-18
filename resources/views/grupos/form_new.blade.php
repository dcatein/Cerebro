@extends('layout.mainlayout')
    @section('content')

    <h1>Grupos</h1>

    <form action="/grupos/insert" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control"/>
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
    </form>
    @stop