@extends('layout.mainlayout')
    @section('content')

<div class="container-fluid pt-2 px-5">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md">
                   <a href="{{action('GruposController@find',$grupo->id)}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15"></i> Voltar</a>
                </div>
                <div class="col-md-10">
                    <h2 class="title">Convide para o grupo  {{$grupo->nome}}</h2>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-12">
                    <div class="container-group">
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
                                <label>Informe o e-mail do seu amigo</label>
                                <input name="email" class="form-control" type="email"/>
                            </div>

                            <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection
    <b></b>

    