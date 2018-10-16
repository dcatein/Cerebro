@extends('layout.mainlayout')
    @section('content')

    <h1>Usuários</h1>

    <form action="/usuarios/insert" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        
        <div class="form-group">
            <label>Tipo</label>
            <select class="custom-select" name="tipo">
                <option value='0'>Aluno</option>
                <option value='1'>Professor</option>
                <option value='2'>Administrador</option>
            </select>
        </div>

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label>Idade</label>
            <input name="idade" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label>Senha</label>
            <input name="senha" class="form-control"/>
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
    </form>
    @stop