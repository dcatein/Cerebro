@extends('layout.mainlayout')
@section('content')
<div class="container-fluid pt-2 ">
   <div class="row justify-content-end ">
      <div class="col-md-12 " >
         <div class="row title">
            <div class="col-md-4 ">
               <div>
                  <h2 class="text-center ">Grupos de estudo</h2>
               </div>
            </div>
            <div class="col-md-2 pt-2" >
               <input type="text"  class="form-control form-control-sm" placeholder=" Procuro o grupo ..." name="txt-busca">
            </div>
            <button type="submit" class="btn btn-sm btn-light btn-pesquisa-grupo mt-2" >Pesquisar</button>
            <div class="col-md-2 pt-2">
               <select class="custom-select" name="tipo" style="height: 32">
                  <option value='0' disabled selected value>Filtrar</option>
                  <option value='1'>Meus Grupos</option>
                  <option value='2'>Exatas</option>
                  <option value='3'>Humanas</option>
                  <option value='4'>Biológicas</option>
               </select>
            </div>
            <div class="col-md pt-2">
               <a href="{{action('GruposController@novo')}}" type="button" class=" fa fa-plus btn btn-sm mt-1 btn-novo-grupo"  title="Novo Grupo"> Novo Grupo </a>
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
               <div class="card  mr-2 ml-2">
                  <div class="card-body card-size">
                     <div class="row">
                        <div class="col-md-12">
                           <h5 class="card-title">{{$grupo->nome}}</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="word-wrap">
                              <p class="card-text ">{{$grupo->descricao}}</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
            <a href="{{action('GruposController@find',$grupo->id)}}" title="Participar do grupo">
            <small class="text-muted float-right"><i class="fa fa-plus  mr-2"></i> Participar</small>
            </a>
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