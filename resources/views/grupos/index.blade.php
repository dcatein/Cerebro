@extends('layout.mainlayout')
@section('content')
<div class="container-fluid ">
   <div class="row justify-content-end  ">
      <div class="col-md-12 " >
         <div class="row title pl-5 pb-2">
            <div class="col-md-4 ">
               <h2 class="text-center">Grupos de estudo</h2>
            </div>
            <div class="col-md">
               <div class="row">
                  <div class="col-md-5 col-12 pt-2">
                     <input type="text"  class="form-control form-control-sm" placeholder=" Procuro o grupo ..." name="txt-busca">
                  </div>
                  <div class="col-md-3 pt-2">
                     <select class="custom-select" name="tipo" style="height: 32">
                        <option value='0' disabled selected value>Filtrar</option>
                        <option value='1'>Meus Grupos</option>
                        <option value='2'>Exatas</option>
                        <option value='3'>Humanas</option>
                        <option value='4'>Biológicas</option>
                     </select>
                  </div>
                  <div class="col-md">
                     <button type="submit" class="btn btn-sm btn-light btn-pesquisa-grupo mt-2" >Pesquisar</button>
                  </div>
                  <div class="col-md pt-2">
                     <a href="{{action('GruposController@novo')}}" type="button" class=" fa fa-plus btn btn-sm mt-1 btn-novo-grupo"  title="Novo Grupo"> Novo Grupo </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row pl-5 mt-2">
            @foreach($grupos as $grupo)
            <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
               <!--div id="card">
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
                  </div-->
               <div class="card  card-size mr-2 ml-2 mb-2">
                  <div class="card-body ">
                     <div class="row">
                        <div class="col-md-12">
                           <h5 class="card-title title-card">{{$grupo->nome}}</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 ">
                           <p class="card-text word-wrap pb-2">{{$grupo->descricao}}</p>
                        </div>
                     </div>
                  </div>
            <a href="{{action('GruposController@find',$grupo->id)}}" title="Participar do grupo">
            <div class="col-md-12 footer-card pr-0">
            <p><small class=" float-right"><i class="fa fa-plus"></i> <b>Participar</b></small></p>
            </div>
            </a>
            </div>
            </a>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection
<b></b>