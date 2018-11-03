
@extends('layout.mainlayout')

@section('content')

<div class="container-fluid pt-2">
    
    <div class="row">
        <div class="col-md-9 pl-5">
            <div class="row">
                <div class="col-md-12 ">
                    
                    <h2 class="title">Meus Grupos de Estudo</h2>
                    
                    <div id="demo" class="carousel slide " data-ride="carousel" >
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner no-padding  index-meus-grupos">
                            <div class="carousel-item active">
                                @foreach($grupos as $grupo)
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <a href="#" title="Abrir grupo">
                                        <div id="card">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <div id="card-title" class="card-title">
                                                        <p>{{$grupo->nome}}</p>
                                                    </div>
                                                    <div id="card-body">
                                                        <p>29 comentários - 4 membros<br>Último comentário em 21/04/2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div id="icon">
                                                        <i class="fa fa-group"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--div class="row">
                                                <div class="col-sm-12">
                                                    <div id="ver-mais">
                                                        <a href="#" >Ver mais</a>
                                                    </div>
                                                </div>
                                            </div-->
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!--div class="carousel-item">
                              <div class="col-xs-4 col-sm-4 col-md-4">
                                <a href="#" onclick=abc(this) class="slider_info">
                                  <img class="img-fluid card-img-top" src="http://via.placeholder.com/300x300">
                                  <div class="card-img-overlay t_img">
                                    <span class="float-left text-uppercase">article</span>
                                    <span class="float-right text-uppercase">2345 views</span>
                                  </div>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nesciunt quam obcaecati maiores atque labore fugiat tenetur tempore veritatis temporibus!</p>
                              </div>
                            </div-->
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon sp"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon sp"></span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <h2 class="title">Novidades</h2>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-type="multi" data-interval="1000">
                        <div class="carousel-inner carousel">
                            @foreach($grupos as $grupo)
                            @if($grupo->id == 1)
                            <div class="carousel-item active">
                                @else
                                <div class="carousel-item">
                                    @endif
                                    <div class="card-novidade a-center" >
                                        <p>{{$grupo->nome}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
            <div class="col-md-3 " >
                
                <div class="row ">
                    <div class="col-md-12">
                        <h2 class="title">Destaques</h2>
                        
                        <div id="carouselExampleFade" class="carousel slide " data-ride="carousel" data-type="multi" data-interval="1000">
                            
                            <div class="carousel-inner carousel">
                                @foreach($grupos as $grupo)
                                @if($grupo->id == 1)
                                <div class="carousel-item active">
                                    @else
                                    <div class="carousel-item">
                                        @endif
                                        <div class="card-destaque " >
                                            <p>{{$grupo->nome}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="1000">
                                
                                <div class="carousel-inner carousel">
                                    
                                    @foreach($grupos as $grupo)
                                    @if($grupo->id == 1)
                                    <div class="carousel-item active">
                                        @else
                                        <div class="carousel-item">
                                            @endif
                                            <div class="card-destaque" >
                                                <p>{{$grupo->nome}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                    
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="carouselExampleFade" class="carousel slide " data-ride="carousel" data-type="multi" data-interval="1000">
                                    
                                    <div class="carousel-inner carousel">
                                        
                                        @foreach($grupos as $grupo)
                                        @if($grupo->id == 1)
                                        <div class="carousel-item active">
                                            @else
                                            <div class="carousel-item">
                                                @endif
                                                <div class="card-destaque" >
                                                    <p>{{$grupo->nome}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                        
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
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