@extends('layout.mainlayout')
@section('content')
<div class="container-fluid pl-5 ">
   <div class="row">
      <div class="col-md-12 " >
         <a href="{{action('PlanosController@index')}}" title="Abrir Plano de Estudo">
            <div class="banner"></div>
         </a>
      </div>
   </div>
   <div class="row">
      <div class="col-md-9">
         <h2  class="text-center title">Destaque</h2>
         <div class="row">
            <div class="col-md-12">
               <div class="card-destaque ">
                  <div id="destaque" class="carousel slide " data-ride="carousel" >
                     <!-- The slideshow -->
                     <div class="carousel-inner no-padding  ">
                        <div class="carousel-item active">
                           <a href="{{action('GruposController@find',1024)}}" title="Abrir grupo">
                              <div>
                                 <img class="card-img-top" alt="Card image cap" src="/img/laravel.png" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Criação de websites com laravel</h5>
                                    <p class="card-text">9 postagens - 4 Integrantes</p>
                                    <p class="card-text"><small class="text-muted">Ler mais...</small></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',1020)}}" title="Abrir grupo">
                              <div >
                                 <img class="card-img-top" alt="Card image cap" src="/img/matematica.jpg" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Resolução da fórmula de baskara</h5>
                                    <p class="card-text">12 postagens - 6 integrantes</p>
                                    <p class="card-text"><small class="text-muted">Ler mais...</small></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',1022)}}" title="Abrir grupo">
                              <div >
                                 <img class="card-img-top" alt="Card image cap" src="/img/portugues.jpg" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Orações coordenadas</h5>
                                    <p class="card-text">23 postagens - 6 integrantes </p>
                                    <p class="card-text"><small class="text-muted">Ler mais...</small></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3 mb-5">
         <div class="row">
            <div class="col-md-12">
               <h4 class="text-center title">Meus Grupos de Estudo</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="grupo1" class="carousel slide " data-ride="carousel" >
                  <div class="card-group">
                     <!-- The slideshow -->
                     <div class="carousel-inner no-padding  ">
                        <div class="carousel-item active">
                           <a href="{{action('GruposController@find',1022)}}" title="Abrir grupo">
                              <div class="card card-height">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Grupo de Literatura</h5>
                                    <div class="word-wrap">
                                       <p class="card-text ">Estou com dificuldade para identificar as figuras de linguagem do segundo paragrafo da pg 34 do livro...</p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @foreach($grupos as $grupo)
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                              <div class="card card-height">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">{{$grupo->nome}}</h5>
                                    <div class="word-wrap">
                                       <p class="card-text ">Não estou conseguindo resolver essa questão de {{$grupo->nome}}, me ajudem por favor!</p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#grupo1" data-slide="prev">
                     <span class="carousel-control-prev-icon sp"></span>
                     </a>
                     <a class="carousel-control-next" href="#grupo1" data-slide="next">
                     <span class="carousel-control-next-icon sp"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="grupo2" class="carousel slide " data-ride="carousel" >
                  <div class="card-group mt-1">
                     <!-- The slideshow -->
                     <div class="carousel-inner no-padding  ">
                        <div class="carousel-item active">
                           <a href="{{action('GruposController@find',1021)}}" title="Abrir grupo">
                              <div class="card card-height ">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Grupo de Java Avançado</h5>
                                    <div class="word-wrap">
                                       <p class="card-text ">Estou tentando aplicar a função Lambda do Java 8 em uma collection mas não obtive sucesso. Segue o código: ... </p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @foreach($grupos as $grupo)
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                              <div class="card card-height ">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">{{$grupo->nome}}</h5>
                                    <div class="word-wrap">
                                        <p class="card-text">Não estou conseguindo resolver essa questão de {{$grupo->nome}}, me ajudem por favor!.</p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#grupo2" data-slide="prev">
                     <span class="carousel-control-prev-icon sp"></span>
                     </a>
                     <a class="carousel-control-next" href="#grupo2" data-slide="next">
                     <span class="carousel-control-next-icon sp"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="grupo3" class="carousel slide " data-ride="carousel" >
                  <div class="card-group mt-1">
                     <!-- The slideshow -->
                     <div class="carousel-inner no-padding ">
                        <div class="carousel-item active">
                           <a href="{{action('GruposController@find',1023)}}" title="Abrir grupo">
                              <div class="card  card-height">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">Grupo de Filosofia</h5>
                                    <div class="word-wrap">
                                       <p class="card-text">Qual similaridade existente entre o pensamento de Aris... </p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @foreach($grupos as $grupo)
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                              <div class="card card-height">
                                 <div class="card-body">
                                    <h5 class="card-title title-card">{{$grupo->nome}}</h5>
                                    <div class="word-wrap">
                                       <p class="card-text">Não estou conseguindo resolver essa questão de {{$grupo->nome}}, me ajudem por favor!.</p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#grupo3" data-slide="prev">
                     <span class="carousel-control-prev-icon sp"></span>
                     </a>
                     <a class="carousel-control-next" href="#grupo3" data-slide="next">
                     <span class="carousel-control-next-icon sp"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
@include('layout.partials.footer')

<br></br>