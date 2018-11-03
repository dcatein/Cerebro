@extends('layout.mainlayout')
    @section('content')
<div class="container-fluid pt-2 px-5">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
              
                <div class="col-md-10">
                    <h2 class="title">Configurações</h2>
                </div>
              <div class="col-md">
                   <a href="{{action('GruposController@find',$grupo->id)}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15"></i> Voltar</a>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-group">
                        <form action="/grupos/update/{{$grupo->id}}" method="post">

                            <input type="hidden" 
                                name="_token" value="{{{ csrf_token() }}}" />

                            <div class="form-group">
                                <label>Nome</label>
                                <input name="nome" class="form-control" value="{{$grupo->nome}}" type="text"/>
                            </div>
                            <div class="form-group">
                                <label>Categoria</label>
                                <select class="form-control form-control" id="filtro">
                                    <option>Exatas</option>
                                    <option>Humanas</option>
                                    <option>Biológicas</option>
                                </select>  
                            </div>

                            <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-group mt-3">
                        <h4>Componentes</h4>
                        <div>
                            lista de componentes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<b></b>