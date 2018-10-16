@extends('layout.mainlayout')
    @section('content')

    <h1>Envios</h1>

    <form action="/envios/update/{{$envio->id}}" method="post">

        <input type="hidden" 
            name="_token" value="{{{ csrf_token() }}}" />
        
            <div class="form-group">
            <label>Tipo</label>
            <select class="custom-select" name="tipo">
                <option value='0'>Arquivo</option>
                <option value='1'>Link</option>
            </select>
        </div>

        <div class="form-group">
            <label>Assunto</label>
            <input name="assunto" class="form-control" type="text" value="{{$envio->assunto}}"/>
        </div>

        <div class="form-group">
            <label>Informação</label>
            <input name="info" class="form-control" type="text" value="{{$envio->info}}"/>
        </div>
        
        <div class="form-group">
            <label>Palavras-Chave</label>
            <input name="palavrasChave" class="form-control" type="text" />
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
    </form>
    @stop
    