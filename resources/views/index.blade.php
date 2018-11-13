
@extends('layout.mainlayout')

@section('content')

<div class="container-fluid pt-2">
    
    <div class="row">
        <div class="col-md-9 pl-5">
            <div class="row">
                <div class="col-md-12 ">
                    
    <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">Meus grupos de estudo</h2>
                    
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
                    <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">Novidades</h2>
                    <div class="card-columns">           

    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46090960_2010952645653169_215100620837748736_n.jpg?_nc_cat=111&_nc_ht=scontent.fqnv2-1.fna&oh=92cc4fabf885ecdc109b1c3c9fb3f902&oe=5C88DB67"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Java</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small>
        </div>         
    </div>
    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/45882989_2010958422319258_5481862030572912640_n.jpg?_nc_cat=104&_nc_ht=scontent.fqnv2-1.fna&oh=393213522b9d90fd1908de2757ce79b4&oe=5C3DB832"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Física</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small> 
        </div>         
    </div>
    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46090960_2010952645653169_215100620837748736_n.jpg?_nc_cat=111&_nc_ht=scontent.fqnv2-1.fna&oh=92cc4fabf885ecdc109b1c3c9fb3f902&oe=5C88DB67"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Excel Avançado</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small>
        </div>         
    </div>
    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/45882989_2010958422319258_5481862030572912640_n.jpg?_nc_cat=104&_nc_ht=scontent.fqnv2-1.fna&oh=393213522b9d90fd1908de2757ce79b4&oe=5C3DB832"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Laravel</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small> 
        </div>         
    </div>
    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46090960_2010952645653169_215100620837748736_n.jpg?_nc_cat=111&_nc_ht=scontent.fqnv2-1.fna&oh=92cc4fabf885ecdc109b1c3c9fb3f902&oe=5C88DB67"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Matemática</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small> 
        </div>         
    </div>
    <div class="card mb-5 mt-3"> 
        <img class="card-img-top" alt="Card image cap" height="40" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/45882989_2010958422319258_5481862030572912640_n.jpg?_nc_cat=104&_nc_ht=scontent.fqnv2-1.fna&oh=393213522b9d90fd1908de2757ce79b4&oe=5C3DB832"> 
        <div class="card-body"> 
            <h4 class="card-title">Grupo de Filosofia</h4> 
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <small class="text-muted float-right">Ler mais...</small> 
        </div>         
    </div>                              
</div>

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
                        <h2 style="background: linear-gradient(90deg, #5C258D, #4389A2); color: #f9f9f9;" class="text-center">Destaque</h2>
                        <div class="card-deck"> 
    <div class="card"> 
        <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46054658_2010988542316246_2124137060477435904_n.jpg?_nc_cat=111&_nc_ht=scontent.fqnv2-1.fna&oh=2824a791c2c43511ae6f8c8ecf8ef32e&oe=5C89DBF4" height="50"> 
        <div class="card-body"> 
            <h5 class="card-title">Título</h5> 
            <p class="card-text">...</p> 
            <p class="card-text"><small class="text-muted">Ler mais...</small></p> 
        </div>         
    </div>     

    <div class="card"> 
        <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/45859518_2010989682316132_5440895361193345024_o.jpg?_nc_cat=102&_nc_ht=scontent.fqnv2-1.fna&oh=c336a5c831a5d1e2d0b6a43668a4ac9f&oe=5C69C042" height="50"> 
        <div class="card-body"> 
            <h5 class="card-title">Título</h5> 
            <p class="card-text">...</p> 
            <p class="card-text"><small class="text-muted">Ler mais...</small></p> 
        </div>         
    </div>     

    <div class="card"> 
        <img class="card-img-top" alt="Card image cap" src="https://scontent.fqnv2-1.fna.fbcdn.net/v/t1.0-9/46098821_2010990972316003_4541025036084969472_n.jpg?_nc_cat=101&_nc_ht=scontent.fqnv2-1.fna&oh=4534284573e7d46e61661fa0fcd917b4&oe=5C6B98C5" height="50"> 
        <div class="card-body"> 
            <h5 class="card-title">Título</h5> 
            <p class="card-text">...</p> 
            <p class="card-text"><small class="text-muted">Ler mais...</small></p> 
        </div>         
    </div>     
</div>

                        
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
