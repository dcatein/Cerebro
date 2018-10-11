@extends('layout.mainlayout')
    @section('content')

    <h1>Grupos - Convite</h1>
{{$grupo->nome}}

    <div>
        @if (isset($convite))
            <div class="alert-danger">
                Usuário não encontrado.
            </div>
        @endif
    </div>
    <form action="/convites/insert/{{$grupo->id}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" type="email"/>
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
    </form>
    @stop