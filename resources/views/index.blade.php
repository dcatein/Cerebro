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
                           <a href="{{action('GruposController@find',1010)}}" title="Abrir grupo">
                              <div>
                                 <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46054658_2010988542316246_2124137060477435904_n.jpg?_nc_cat=111&_nc_ht=scontent.fqnv2-1.fna&oh=2824a791c2c43511ae6f8c8ecf8ef32e&oe=5C89DBF4" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title">Criação de websites com laravel</h5>
                                    <p class="card-text">9 postagens - 4 Integrantes</p>
                                    <p class="card-text"><small class="text-muted">Ler mais...</small></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',1020)}}" title="Abrir grupo">
                              <div >
                                 <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/45859518_2010989682316132_5440895361193345024_o.jpg?_nc_cat=102&_nc_ht=scontent.fqnv2-1.fna&oh=c336a5c831a5d1e2d0b6a43668a4ac9f&oe=5C69C042" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title">Resolução da fórmula de baskara</h5>
                                    <p class="card-text">12 postagens - 6 integrantes</p>
                                    <p class="card-text"><small class="text-muted">Ler mais...</small></p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',1030)}}" title="Abrir grupo">
                              <div >
                                 <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46098821_2010990972316003_4541025036084969472_n.jpg?_nc_cat=101&_nc_ht=scontent.fqnv2-1.fna&oh=4534284573e7d46e61661fa0fcd917b4&oe=5C6B98C5" height=""> 
                                 <div class="card-body">
                                    <h5 class="card-title">Orações coordenadas</h5>
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
      <div class="col-md-3">
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
                           <a href="{{action('GruposController@find',1010)}}" title="Abrir grupo">
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">Grupo de Literatura</h5>
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
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">{{$grupo->nome}}</h5>
                                    <div class="word-wrap">
                                       <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
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
                           <a href="{{action('GruposController@find',1010)}}" title="Abrir grupo">
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">Grupo de Java Avançado</h5>
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
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">{{$grupo->nome}}</h5>
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
                           <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">Grupo de Física IV</h5>
                                    <div class="word-wrap">
                                       <p class="card-text">Já tiveram dificuldade para aplicar a fórmula cinematica? Entendi como funciona mas não estou consegui...</p>
                                    </div>
                                    <small class="text-muted float-right">Ler mais...</small>
                                 </div>
                              </div>
                           </a>
                        </div>
                        @foreach($grupos as $grupo)
                        <div class="carousel-item ">
                           <a href="{{action('GruposController@find',$grupo->id)}}" title="Abrir grupo">
                              <div class="card ">
                                 <div class="card-body">
                                    <h5 class="card-title">{{$grupo->nome}}</h5>
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
<br></br>