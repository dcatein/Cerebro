@extends('layout.mainlayout')
@section('content')
<div class="row" style="background: linear-gradient(90deg, #2b5876, #4e4376);">
   <!--cabeçalho-->
   <div class="col-md-8 " style="display:inline-block">
      <div class="row">
         <!--subtitulo-->
         <div class="col-md-12">
                   <a href="{{action('GruposController@index')}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15" ></i> Voltar</a>

         </div>
      </div>
      <!--subtitulo-->
   </div>
   <div class="col-md-4 col-sm col pt-2" style="display:inline-block">
      <div class="row">
         <div class="col center pl-5">
            <div title="Componentes" class="fa fa-group">
               <p class="icon-notify">4</p>
            </div>
         </div>
         <div class="col center">
            <div title="Comentários" class="fa fa-commenting ">
               <p class="icon-notify">4</p>
            </div>
         </div>
         <div class="col-md col center"">
            <a href="{{action('GruposController@convidarUsuario',$grupo['grupo']->id)}}" title="Convide um amigo" class="fa fa-user-plus ">
               <p class="icon-notify " >Convide</p>
            </a>
         </div>
         <div class="col center" >
            <a href="{{action('GruposController@alterar',$grupo['grupo']->id)}}" title="Configurações" class="fa fa-cogs">
               <p id="lbl-config" class="icon-notify">Configurações</p>
            </a>
         </div>
      </div>
   </div>
</div>
<!--cabeçalho-->
<div class="container-fluid md-7">
   <div class="row justify-content-end ">
      <div class="col-md-6 center" style="display:inline-block">
         <div class="row">
            <!--corpo-->
            <div class="col-md-12 mt-2 pl-5">
               <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">{{$grupo['grupo']->nome}}</h2>
               <div class="sub-title">
                {{$grupo['grupo']->descricao}}
               </div>
               <div class="row"  >
                  <div class="card-body">
                     <div class="container-group col-md-12"">
                        <!-- escrever comentarios-->  
                        <div class="card gedf-card">
                           <div class="card-header " style="background-color: #4c4476;">
                              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist ">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Postagem</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="card-body border-danger">
                              <form action="/envios/postar/{{$grupo['grupo']->id}}" method="post" >
                                 <div class="form-group ">
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                 </div>
                                 <div class="form-group ">
                                    <input type="text" name="assunto" placeholder="Assunto" class="form-control form-control-sm mb-1" required/>
                                 </div>
                                 <div class="form-group ">
                                    <textarea placeholder="Conteúdo da sua postagem" class="mb-1" cols="40" name="info" required></textarea>
                                 </div>
                                 <div class="form-group"> 
                                    <label class="control-label" for="exampleInputFile"></label>     
                                    <input type="file" id="exampleInputFile"> 
                                 </div>
                                 <div class="form-group ">
                                    <input type="text" name="palavras" placeholder="Palavras-chave separadas por ponto e vírgula (;)" required class="form-control form-control-sm" />
                                 </div>
                                 <button type="submit" class="btn btn-default" style="background-color: #2e8f63; color: #ffffff">Salvar</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- escrever comentarios-->
         </div>
         <div class="pl-5">
            <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">Postagens</h2>
            @foreach ($grupo['envios'] as $envio)
            <div class=" container-group mb-2">
               <!--postagem-->
               <div class="container-postagem">
                  <div class="card-header  mw-100 mh-100">
                     <div class="d-flex">

                           <div class="mr-2">
                              <img class="rounded-circle" width="45" src="/img/user-pic-exemple.jpg " alt="">
                           </div>
                           <div class="ml-2">
                              <div class="">@Usuário</div>
                              <div class="text-muted">Administrador</div>
                           </div>
                           <div>
                              <img class="rounded-circle ml-3" width="30" src="/img/gold.png " alt="">   
                           </div>
                               
                        <div>
                            <p id="data-hora " class="float-right ml-5"><small>{{ date('d/m/Y H:i:s',  strtotime($envio->created_at))}}</small></p>
<p></p>
                               @if(count($envio->comentarios) > 1)
                                       <small class="ml-5">{{count($envio->comentarios)}} comentários</small>
                                       @endif
                                       @if(count($envio->comentarios) == 1)
                                       <small >{{count($envio->comentarios)}} comentário</small>
                                       @endif
                        </div>
                        </div>
                  </div>
                  <div class="col-8 col-sm-9 col-md-10 ">
                     <!--conteudo da postagem-->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row">
                              <!--assunto da postagem-->
                              <div class="col-md-12">
                                 <div class="postagem-group">
                                    <div class="row">
                                       <div class="col-md-10">
                                          <a href="{{action('EnviosController@detalhes',$envio->id)}}" title="Ver postagem completa" class="mb-0">
                                             <h5 class="mb-0"> {{$envio->assunto}}</h5>
                                          </a>
                                          <p id="keywords" class="mt-0">
                                             @foreach($envio->palavras as $palavra)
                                             <small>{{$palavra['palavra']}},</small>
                                             @endforeach
                                          </p>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <!--conteudo da postagem-->
                              <div class="col-md-12">
                                 <div class="postagem-group">
                                    <p id="conteudo"> {{$envio->info}}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--conteudo da postagem-->
                  <div class="card-footer" style="background-color: #4c4476;">
                     <!--footer da postagem-->
                     <div class="col-md">
                        <div class="postagem-footer-group">
                           <div class="row">
                              <a href="" title="Like" id="btn-like" class="card-link fa btn btn-sm mt-0 text-white border-success border"> <img src="/img/like.png" width="19" height="15"/> </i></a>
                              <a href="" id="btn-deslike" title="Deslike" class="card-link fa btn btn-sm mt-0 text-white border border-danger "> <img src="/img/deslike.png" width="19" height="15"/> </i></a>
                              <div class="col-md">
                                 <div class="row">
                                    <div class="col-md">
                                       <a href="{{action('EnviosController@detalhes',$envio->id)}}" title="Ver comentários" class="text-white">
                                       Comentar
                                    <!--   @if(count($envio->comentarios) > 1)
                                       {{count($envio->comentarios)}} comentários
                                       @endif
                                       @if(count($envio->comentarios) == 1)
                                       {{count($envio->comentarios)}} comentário
                                       @endif
                                    -->   </a>
                                    </div>
                                    <div class="" id="controls">
                                       <a href="" class="mr-1 text-white" id="btn-edit "><i class="fa fa-edit" id="btn-edit-ico" ></i> Editar</a>
                                       <a href="{{action('EnviosController@delete',$envio->id)}}" class="fa fa-close text-white" id="btn-close"><i id="btn-close-ico" ></i> Excluir</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--footer da postagem-->
               </div>
            </div>
            <!--postagem-->
            @endforeach
         </div>
         <div class="col-md-0">
         </div>
      </div>
      <!--corpo-->
   </div>
</div>
</div>
@include('layout.partials.footer')
@endsection
<b></b>