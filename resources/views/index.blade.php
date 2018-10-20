
@extends('layout.mainlayout')

@section('content')

<!--div class="album text-muted">

  <div class="container">

    <div class="row">

      oi
    </div>

  </div>

</div-->
<!--  @for ($i = 0; $i < 6; $i++)

<div class="d-flex d-inline">

  <div class="row">
    <div class="col-sm-12 col-s-8">
      <div id="card">
        <div class="row">
          <div class="col-sm-9">
            <div id="card-title" class="card-title">
              <p>Titulo do grupo</p>
            </div>
            <div id="card-body">
              <p>29 comentários - 4 membros</p>
              <p>Último comentário em 21/04/2019</p>
            </div>
          </div>
          <div class="col-sm">
            <div id="icon">
              @
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div id="ver-mais">
              <a href="#" >Ver mais</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
    @endfor

</div>-->



<div class="container" style="padding-right: 0px;">
    
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-10">
                    
                    <h2 class="title">Meus Grupos de Estudo</h2>
                    <!-- @for ($i = 0; $i < 6; $i++)
                       <div id="card">
                         <div class="row">
                           <div class="col-sm-9">
                             <div id="card-title" class="card-title">
                               <p>@$i  Titulo do grupo</p>
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
                         <div class="row">
                           <div class="col-sm-12">
                             <div id="ver-mais">
                               <a href="#" >Ver mais</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     @endfor-->
                    
                    <div id="demo" class="carousel slide " data-ride="carousel" style="margin-top: -30px;margin-bottom: -10px;">
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner no-padding my-5 index-meus-grupos">
                            <div class="carousel-item active">
                                @for ($i = 0; $i < 3; $i++)
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div id="card">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div id="card-title" class="card-title">
                                                    <p>@$i  Titulo do grupo</p>
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
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="ver-mais">
                                                    <a href="#" >Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
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
            <div class="row">
                <div class="col-md-10">
                    <h2 class="title">Interessantes</h2>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-type="multi" data-interval="1000">
                        <div class="carousel-inner carousel">
                            <div class="carousel-item active">
                                <div class="" style="background: red;width: 100vw;height: 50vh">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="" style="background: blue;width: 100vw;height: 50vh">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="" style="background: purple;width: 100vw;height: 50vh">
                                    olaá
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="col-md-2" >
            
            <div class="row">
                <h2 class="title">Destaques</h2>
                
                <div class="col-md-12">
                    
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-type="multi" data-interval="1000">
                        
                        <div class="carousel-inner carousel">
                            
                            <div class="carousel-item active">
                                <div class="" style="background: red;width: 100vw;height: 50vh">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="" style="background: blue;width: 100vw;height: 50vh">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="" style="background: purple;width: 100vw;height: 50vh">
                                    olaá</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
