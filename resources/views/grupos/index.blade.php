@extends('layout.mainlayout')

@section('content')
<div class="container-fluid pt-2 ">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md-4 " style="display:inline-block">
                    <div>
                        <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">Grupos de estudo</h2>                 
                    </div>
                </div>
                
                <div class="col-md-2 pt-2" style="display:inline-block">
                    <input type="text"  class="form-control form-control-sm" placeholder=" Procuro o grupo ..." name="txt-busca">
                </div>
                <button type="submit" class="btn btn-default" style="background-color: #4a6b9c; color: #ffffff; height: 32; margin-top: 7px">Pesquisar</button>
                <div class="col-md-2 pt-2" style="display:inline-block; ">                    
                    <select class="custom-select" name="tipo" style="height: 32">
                        <option value='0' disabled selected value>Filtrar</option>
                        <option value='1'>Meus Grupos</option>
                        <option value='2'>Exatas</option>
                        <option value='3'>Humanas</option>
                        <option value='4'>Biológicas</option>
                    </select>
                </div>
                <div class="col-md pt-2" style="display:inline-block">
                                    <a href="{{action('GruposController@novo')}}" type="button" class=" fa fa-plus btn btn-sm"style="background-color: #4a9b75; color: #ffffff; margin-top: 4px" title="Novo Grupo"></a>
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
    