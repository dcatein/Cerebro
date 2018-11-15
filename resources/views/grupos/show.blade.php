@extends('layout.mainlayout')
    @section('content')


<div class="container-fluid pt-2 px-4">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row"><!--cabeçalho-->
                <div class="col-md-8 " style="display:inline-block">
                    <div class="row"><!--titulo-->
                        <div class="col-md-12">
                            <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">{{$grupo['grupo']->nome}}</h2>
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

                        <div class="col-md center"">
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
            </div><!--cabeçalho-->
            
            <div class="row"><!--corpo-->

                <div class="col-md-4">
                    <div class="container-group my-2 py-2 px-2 center""><!-- escrever comentarios-->  
                        <div class="row" ; >
                            <form action="/envios/postar/{{$grupo['grupo']->id}}" method="post" >
                                <div class="form-group ">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            </div>

                            <div class="form-group ">
                                <input type="text" name="assunto" placeholder="Assunto" class="form-control form-control-sm mb-1" />
                            </div>

                            <div class="form-group ">
                                <textarea placeholder="Conteúdo da sua postagem" class="mb-1" cols="40" name="info"></textarea>
                            </div>

                            <div class="form-group"> 
                            <label class="control-label" for="exampleInputFile"></label>     
                             <input type="file" id="exampleInputFile"> 
                            </div>

                            <div class="form-group ">
                                <input type="text" name="palavras" placeholder="Palavras-chave separadas por ponto e vírgula (;)" class="form-control form-control-sm" />

                            </div>

                                <button type="submit" class="btn btn-default" style="background-color: #2e8f63; color: #ffffff">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div><!-- escrever comentarios-->
            </div>
<div class="col-md "><!--materiais-->
                    <div class="row ">
                        <div class="col-md-12">
                        <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center">Materiais</h2>
                       </div>            
                    </div>
                     <div class="row ">
                        <div class="col-md-12">
                            <div class="container-group"></div>
                       </div>            
                    </div>
                </div><!--materiais-->
                <div>
                    @foreach ($grupo['envios'] as $envio)
                    <div class=" container-group mb-2"><!--postagem-->
                        <div class="container-postagem">
                            <div class="row">

                                <div class="col-md-2" ><!--img do usuario da postagem-->
                                    <div class="img-perfil-post">
                                        <img src="/img/user-pic-exemple.jpg " height="100"/> 
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
                                                        <div class="row">
                                                            <div class="col-md-8">
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
                                                            <div class="col-md" id="controls">
                                                                <a href="" class="mr-1" id="btn-edit"><i class="fa fa-edit" id="btn-edit-ico"></i> Editar</a>
                                                                <a href="" id="btn-close"><i class="fa fa-close" id="btn-close-ico" ></i> Excluir</a>
                                                            </div>
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
                
    
            </div><!--corpo-->
                
        </div>
    </div>
    </div>
    
   @endsection
    <b></b>