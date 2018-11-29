@extends('layout.mainlayout')
@section('content')
<div class="container-fluid container-login ">
   <div class="row">
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-12 ml-0 pr-0 pl-0">
               <nav class="navbar navbar-expand-lg navbar-light bg-warning nav-login ml-md-0 mr-md-0 pl-md-0 pr-md-0 pl-md-5 " >
                  <button class="navbar-toggler border border-ligh ml-5" type="button" data-toggle="collapse" data-target="#navbarToggler214" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
                  <span class="navbar-toggler-icon"></span> 
                  </button>
                  <img src="/img/logo-titulo.png" class="center d-block d-sm-block d-lg-none"> 
                  <div class="collapse navbar-collapse ml-md-0 mr-md-0 pl-md-0 pr-md-0 mr-sm-5 ml-sm-5 pr-sm-5 pl-sm-5" id="navbarToggler214">
                     <a href="{{action('IndexController@index')}}" title="Home" ><img src="/img/logo-titulo.png" class="ml-5 d-none d-sm-none d-md-none d-lg-block"> </a>
                     <div class="col-md-4 col-sm-0"></div>
                     <form action="/login/entrar" method="get" class="form-inline w-100 pl-5 ">
                                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                     <div class="form-group "> 
                        <label for="formInput261">E-mail</label>                     
                        <input type="text" name="email" class="form-control-sm mr-3 " id="formInput261" placeholder="Digite seu e-mail..."> 
                     </div>
                     <div class="form-group "> 
                        <label for="formInput322">Senha</label>                     
                        <input type="password" name="senha"  class="form-control-sm" id="formInput322" placeholder="Digite sua senha..."> 
                     </div>

                     <button class="btn-entrar-login btn mt-3 mr-5 ml-2 border border-light text-white font-weight-bold btn-sm" type="submit" >Entrar</button>
                  </form>
                  </div>
               </nav>
            </div>
         </div>
         <div class="row mb-0">
            <div class="col-md-12  ">
               <div id="div-cadastro" class="center mt-2 pl-5 pr-5 pb-0">
                  <form class="form-horizontal" action="/usuarios/insert" method="post">
                     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                     <fieldset >
                        <legend class="font-weight-bold mb-3">Crie sua conta gratuita</legend>
                        <div class="form-group ">
                           <label class="  control-label" for="nome">Nome Completo</label>                             
                           <input id="nome" name="nome" type="text" placeholder="Digite seu nome completo..." class="form-control input-md" required="">
                        </div>
                        <div class="form-group">
                           <label class=" control-label" for="email">E-mail</label>                             
                           <input id="email" name="email" type="text" placeholder="Digite seu E-mail..." class="form-control input-md " required="" checked="checked">
                        </div>
                        <div class="form-group">
                           <label class=" control-label" for="senha">Senha</label>
                           <input id="senha" name="senha" type="password" placeholder="Escolha uma senha..." class="form-control input-md" required="">
                        </div>
                        <div class="form-group">
                           <label class=" control-label" for="Sexo">Sexo</label><br>
                           <label class="radio-inline mr-5" for="Sexo-0">
                           <input type="radio" name="Sexo" id="Sexo-0" value="Masculino" checked="checked">
                           Masculino
                           </label>                                 
                           <label class="radio-inline" for="Sexo-1">
                           <input type="radio" name="Sexo" id="Sexo-1" value="Feminino">
                           Feminino
                           </label>
                        </div>
                        <div class="form-group  center ">
                           <label class=" control-label" for="criar"></label>
                           <button id="criar" name="criar" class="btn btn-primary border-light font-weight-bold btn-inscrever-login" type="submit" >Inscrever-se</button>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
         <div class="row " >
            <div class="col-md-12 pl-0 pr-0">
               <div class="row footer-login ml-0">
                  <div class="col pl-5">
                     <img src="/img/estudo.png" height="45" width="45" alt="Estude em casa" class="mt-3 mb-3 float-left mr-2 ml-3">
                     <p class="text-white mt-4">Estude fácilmente do conforto de sua casa.</p>
                  </div>
                  <div class="col">
                     <img height="45" width="45" class="mt-3 mb-3 float-left mr-2 ml-3" src="/img/grupo.png">
                     <p class="text-white mt-4">Entre em grupos do seu interesse.</p>
                  </div>
                  <div class="col">
                     <img height="45" width="45" class="mt-3 mb-3 float-left mr-2 ml-3" src="/img/arquivo.png">
                     <p class="text-white mt-4">Compartilhe arquivos e interaja.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
<b></b>