@extends('layout.mainlayout')
    @section('content')
<div class="container-fluid pt-2">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md-10">
                    <h2 class="title">Novo Grupo</h2>
                </div>
                <div class="col-md">
                   <a href="{{action('GruposController@index')}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15"></i> Voltar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-group">
                        <form action="/grupos/insert" method="post">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                            <div class="form-group">
                                <label>Nome</label>
                                <input name="nome" class="form-control"/>
                            
                                <label>Descrição</label>
                                <input name="descricao" class="form-control"/>

                                <label>Categoria</label>
                                <select class="form-control" id="exampleFormControlSelect1">
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
        </div>
    </div>
</div>

   @endsection
    <b></b>