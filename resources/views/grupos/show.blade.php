@extends('layout.mainlayout')
    @section('content')


<div class="container-fluid pt-2 px-4">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row"><!--cabeçalho-->
                <div class="col-md-8 " style="display:inline-block">
                    <div class="row"><!--titulo-->
                        <div class="col-md-12">
                            <h2 class="title">{{$grupo['grupo']->nome}}</h2>
                        </div>
                    </div><!--titulo-->
                    <div class="row"><!--subtitulo-->
                        <div class="col-md-12">
                            <div class="sub-title">
                                <p>categorias de interesse</p>
                                <p>ultimo comentario as</p>
                            </div>
                        </div>
                    </div><!--subtitulo-->
                </div>
                <div class="col-md-4 col-sm pt-2" style="display:inline-block">
                    <div class="row">
                        <div class="col center">
                            <div title="Componentes" class="fa fa-group">
                                <p class="icon-notify">4</p>
                            </div>
                        </div>
                        
                        <div class="col center">
                            <div title="Comentários" class="fa fa-commenting ">
                                <p class="icon-notify">4</p>
                            </div>
                        </div>
                        <div class="col center">
                            <a href="{{action('GruposController@convidarUsuario',$grupo['grupo']->id)}}" title="Convide um amigo" class="fa fa-user-plus ">
                                <p id="lbl-convide" class="icon-notify">Convide</p>
                            </a>
                        </div>
                        <div class="col center" >
                            <a href="{{action('GruposController@alterar',$grupo['grupo']->id)}}" title="Configurações" class="fa fa-cogs">
                                <p id="lbl-config" class="icon-notify">Configurações</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--cabeçalho-->
            
            <div class="row"><!--corpo-->
                <div class="col-md-8 ">
                   
                    <div class="container-group my-4 py-2 px-2"><!-- escrever comentarios-->  
                        <div class="row">
                            <form action="/envios/postar/{{$grupo['grupo']->id}}" method="post" class="col-md">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="text" name="assunto" placeholder="Assunto" class="form-control form-control-sm mb-1" />
                                <textarea placeholder="Conteúdo da sua postagem" class="mb-1" name="info"></textarea>
                                <input type="text" name="palavras" placeholder="Palavras-chave separadas por ponto e vírgula (;)" class="form-control form-control-sm" />
                                <button class="btn btn-sm fa fa-paper-plane mt-2" type="Submit">Salvar</button>
                            </form>
                        </div>
                    </div><!-- escrever comentarios-->

                    @foreach ($grupo['envios'] as $envio)
                    <div class=" container-group mb-2"><!--postagem-->
                        <div class="container-postagem">
                            <div class="row">
                                <div class="col col-sm-3 col-md-2 "><!--img do usuario da postagem-->
                                    <div class="perfil-post">
                                        <img src="/img/user-pic-exemple.jpg" width="60" height="60" /> 
                                        <p id="lbl-name">Nome</p>
                                    </div>
                                </div><!--img do usuario da postagem-->
                                <div class="col-8 col-sm-9 col-md-10 "><!--conteudo da postagem-->
                                     <div class="row">
                                        <div class="col-md-12">
                                             <div class="row"><!--assunto da postagem-->
                                                <div class="col-md-12">
                                                    <div class="postagem-group">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <a href="{{action('EnviosController@detalhes',$envio->id)}}" title="Ver postagem completa"><h5> {{$envio->assunto}}</h5></a>

                                                                <p id="keywords">
                                                                    @foreach($envio->palavras as $palavra)
                                                                        {{$palavra['palavra']}},
                                                                    @endforeach
                                                                </p>
                                                            </div>        
                                                            <div class="col-md">
                                                                 <p id="data-hora">{{ date('d/m/Y H:i:s',  strtotime($envio->created_at))}}</p>
                                                            </div>
                                                        </div>                                                 
                                                    </div>                                                    
                                                </div>
                                            </div>
                                            <div class="row"><!--conteudo da postagem-->
                                                <div class="col-md-12">
                                                    <div class="postagem-group">
                                                         <p id="conteudo"> {{$envio->info}}</p>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     
                                     <div class="row"><!--footer da postagem-->
                                        <div class="col-md-12">
                                            <div class="postagem-footer-group">
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <a href="{{action('EnviosController@detalhes',$envio->id)}}" title="Ver comentários">
                                                                @if(count($envio->comentarios) == 0)
                                                                    Não há comentários
                                                                @endif
                                                                @if(count($envio->comentarios) > 1)
                                                                    {{count($envio->comentarios)}} comentários
                                                                @endif
                                                                @if(count($envio->comentarios) == 1)
                                                                    {{count($envio->comentarios)}} comentário
                                                                @endif
                                                             </a>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div><!--footer da postagem-->

                                </div> <!--conteudo da postagem-->                    
                            </div>   
                        </div>                                                        
                   </div><!--postagem-->
                    @endforeach


                </div>



                <div class="col-md-0">
                    
                </div>
                <div class="col-md "><!--materiais-->
                    <div class="row ">
                        <div class="col-md-12">
                        <h2 class="title">Materiais</h2>
                       </div>            
                    </div>
                     <div class="row ">
                        <div class="col-md-12">
                            <div class="container-group"></div>
                       </div>            
                    </div>
                </div><!--materiais-->
    
            </div><!--corpo-->
                
        </div>
    </div>
    </div>
    
   @endsection
    <b></b>