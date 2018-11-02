<div class="container-fluid fixed-top "> 
  <div class="row d-flex d-md-block flex-nowrap wrapper">
      <div class="menu-lateral h-100">

        <div class="sidebar left fliph ">
                         
          <ul class="list-sidebar bg-defoult">

            <li><a href="{{action('IndexController@index')}}" title="Home" class="button-left"><i class="fa fa-diamond"></i> <span class="nav-label">Cerebro</span>
            </a> </li>
              <li> <a href="#" class="button-left" title=""> <i class="fa fa-user-circle"></i> <span class="nav-label"> Perfil </span> </a>
            </li>
            <li> <a href="{{action('GruposController@index')}}" title="Grupos de Estudo" class="button-left" ><i class="fa fa-diamond"></i> <span class="nav-label">Grupos</span></a> </li>
            <li> <a href="#" class="button-left"><i class="fa fa-heart"></i> <span class="nav-label">Favorito</span></a> </li>             
            <li> <a href="{{action('PlanosController@index')}}" class="button-left"><i class="fa fa-calendar"></i> <span class="nav-label">Plano de Estudo</span> </a></li>
            <li> <a href="#" class="button-left"><i class="fa fa-flash"></i> <span class="nav-label">Destaque</span></a> </li>
            <li> <a href="#" class="button-left"><i class="fa fa-cogs"></i> <span class="nav-label">Configurações</span></a> </li>
            <li> <a href="#" class="button-left"><i class="fa fa-power-off"></i> <span class="nav-label">Sair</span></a> </li>
          </ul>
        </div>

        <!--div id="menu-controls" class="button-left menu-controls" >
          <i class="fa fa-chevron-right active" id="btn-right"></i>
          <i class="fa fa-chevron-left " id="btn-left"></i>
        </div-->
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
