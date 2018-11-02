@extends('layout.mainlayout')
    @section('content')


<div class="container-fluid pt-2 px-5">
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
                <div class="col-md-4 pt-2" style="display:inline-block">
                    <div class="row">
                        <div class="col-md center">
                            <div title="Componentes" class="fa fa-group">
                                <p class="icon-notify">4</p>
                            </div>
                        </div>
                        
                        <div class="col-md center">
                            <div title="Comentários" class="fa fa-commenting ">
                                <p class="icon-notify">4</p>
                            </div>
                        </div>
                        <div class="col-md center">
                            <a href="{{action('GruposController@convidarUsuario',$grupo['grupo']->id)}}" title="Convide um amigo" class="fa fa-user-plus ">
                                <p class="icon-notify">Convide</p>
                            </a>
                        </div>
                        <div class="col-md center" >
                            <a href="{{action('GruposController@alterar',$grupo['grupo']->id)}}" title="Configurações" class="fa fa-cogs">
                                <p class="icon-notify">Configurações</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--cabeçalho-->
            
            <div class="row"><!--corpo-->
                <div class="col-md-8 ">
                    <div class="container-group my-4 py-2 px-2"><!-- escrever comentarios-->  
                        <div class="row">
                            <div class="col-md-11">
                                <textarea></textarea> 
                            </div>
                            <div class="col-md pt-3">
                                <a href="#" type="button" class="btn btn-sm fa fa-paper-plane" title="Enviar"></a>
                            </div>
                        </div>
                    </div><!-- escrever comentarios-->

                    <div class="container-group">
                        @foreach ($grupo['envios'] as $envio)
                            <p>{{$envio->assunto}}</p>
                            <p>{{$envio->info}}</p>
                            <p>{{$envio->created_at}}</p>
                            
                            <p>Palavras-chave:</p>
                            @foreach($envio->palavras as $palavra)
                                <p>{{$palavra['palavra']}}</p>
                            @endforeach

                            <p>Comentários:</p>
                            @foreach($envio->comentarios as $comentario)
                                <p>{{$comentario->usuario}}</p>
                                <p>{{$comentario->texto}}</p>
                            @endforeach
                            ------------//---------------
                        @endforeach
                    </div>


                   <div class=" container-group"><!--comentarios-->
                        <div class="container-comentario">
                            <div class="row">
                                <div class="col-md-2">
                                     foto 
                                 </div>
                                <div class="col-md-10">
                                     comentario
                                 </div>                     
                            </div>                                                        
                        </div>                                                        
                   </div><!--comentarios-->
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
    




        <!--h1>{{$grupo['grupo']->nome}}</h1>
        @if(isset($grupo['grupo']->conviteResposta))
            @if($grupo['grupo']->conviteResposta)
                <div class="alert alert-success">
                    Convite enviado com sucesso
                </div>
            @else
                <div class="alert alert-danger">
                    Usuário já convidado
                </div>
            @endif
        @endif
        <ul>
            <li>
                @if($grupo['grupo']->classificacao == null)
                    Não possui
                @else
                    {{$grupo['grupo']->classificacao}}
                @endif
            </li>
        </ul>

        <a href="{{action('GruposController@alterar',$grupo['grupo']->id)}}">
            Alterar
        </a>

        <a href="{{action('GruposController@convidarUsuario',$grupo['grupo']->id)}}">
            Convidar Membros
        </a-->
   @endsection
    <b></b>