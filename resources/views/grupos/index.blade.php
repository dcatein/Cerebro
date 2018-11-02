@extends('layout.mainlayout')

@section('content')
<div class="container-fluid pt-2 ">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md-4 " style="display:inline-block">
                    <div>
                        <h2 class="title">Grupos de Estudo</h2>                 
                    </div>
                </div>
                
                <div class="col-md-3 pt-2" style="display:inline-block">
                    <input type="text"  class="form-control form-control-sm" placeholder=" Procuro o grupo ..." name="txt-busca">
                </div>
                <div class="col-md-3 pt-2" style="display:inline-block">
                    <select class="form-control form-control-sm" id="filtro">
                        <option disabled selected value>Filtrar</option>
                        <option>Meus Grupos</option>
                        <option>Exatas</option>
                        <option>Humanas</option>
                        <option>Biológicas</option>
                    </select>  
                </div>
                <div class="col-md pt-2" style="display:inline-block">
                                    <a href="{{action('GruposController@novo')}}" type="button" class=" fa fa-plus btn btn-sm" title="Novo Grupo"></a>
                </div>
            </div>
            
            <div class="row">

                @foreach($grupos as $grupo)
                    <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                        <div id="card">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div id="card-title" class="card-title">
                                        <p>{{$grupo->nome}}</p>
                                    </div>
                                    <div id="card-body">
                                        <p>29 comentários - 4 membros</p>
                                        <p>Último comentário em 21/04/2019</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div id="icon">
                                        <i class="fa fa-group"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    @endsection
    <b></b>
    