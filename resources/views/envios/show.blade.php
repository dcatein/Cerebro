@extends('layout.mainlayout')
    @section('content')
       <!-- <h1>{{$envio->assunto}}</h1>
        <ul>
            <li>
                {{$envio->tipo}}
            </li>
            <li>
                {{$envio->info}}
            </li>
            <li>
                {{$envio->classificacao}}
            </li>
            <p>Palavras-Chave:</p>
            @foreach ($envio['palavras'] as $palavra)
                {{$palavra->palavra}}
            @endforeach
        </ul>
        <p>
            <p>{{count($envio['comentarios'])}} Comentários:</p>
            <form action="/comentarios/comentar/{{$envio->id}}" method="post">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="form-group">
                    <input name="texto" class="form-control" />
                    <input type="hidden" name="usuario" value=103 />
                </div>
                <button class="btn btn-primary" type="Submit">Salvar</button>
            </form>
            
            @foreach($envio['comentarios'] as $comentario)
                <p>{{$comentario->usuario}} {{$comentario->created_at}}</p>
                <p>{{$comentario->texto}}</p>
            @endforeach
        </p>

        <a href="{{action('EnviosController@alterar',$envio->id)}}">
            Alterar
        </a>
  -->

<div class="row" style="background: linear-gradient(90deg, #2b5876, #4e4376);"><!--cabeçalho-->
                <div class="col-md-8 " style="display:inline-block">
                    <div class="row"><!--subtitulo-->
                        <div class="col-md-12">
                            
                        </div>
                    </div><!--subtitulo-->
                </div>
                <div class="col-md " ><!--botao voltar-->
                   <a href="{{action('GruposController@find',$envio->id_grupo)}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15"></i> Voltar</a>
                </div><!--botao voltar-->

</div>





<div class="container-fluid pt-2 px-5">
    <div class="row justify-content-end ">
        <div class="col-md-6 center" style="display:inline-block">  

            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);" class="text-center"> {{$envio->assunto}}</h2>
                    <div class="container-group mt-2">
                        <!--{{$envio->tipo}}-->
                        {{$envio->info}}
                        <!--{{$envio->classificacao}}-->
            


                    </div><!--titulo-->
                </div><!--titulo-->
                
            </div>
            
            <div class="row center">
                <!--conteudo postagem-->
                <div class="col-md-12">

                </div>
            </div><!--conteudo postagem-->
            <div class="row center"><!--subtitulo-->
                <div class="col-md-12">
                    <div class="sub-title mt-1">
                        <p>
                            Palavras-Chave:
                            @foreach ($envio['palavras'] as $palavra)
                                {{$palavra->palavra}}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div><!--subtitulo-->
            <div class="row">
                <div class="col-md-12">
                    <h6 class="title mt-3" style="color: #ffffff; background: linear-gradient(90deg, #5C258D, #4389A2);"> Comentários</h6>
                    @foreach($envio['comentarios'] as $comentario)
                        <div class="container-group mt-2">
                            <div class="content-comentario">
                                <div class="card-header">
                                <img class="rounded-circle" width="45" src="/img/user-pic-exemple.jpg " alt="">
                                <span id="name">{{$comentario->usuario}}:</span>
                            </div>
                            <div class="card-body">
                                <span id="content">{{$comentario->texto}}</span>
                            </div>
                            </div>
                            
                            <div class="card-footer" style="background-color: #4c4476;">
                                <a href="" class="mr-1 text-white" id="btn-edit"><i class="fa fa-edit" id="btn-edit-ico"></i> Editar</a>
                                <a href="" class="text-white" id="btn-close"><i class="fa fa-close" id="btn-close-ico" ></i> Excluir</a>
                                <span id="date" class="text-white float-right">{{date('d/m/Y H:i:s',strtotime($comentario->created_at))}}</span>
                            </div>                            
                        </div>
                    @endforeach


                    <div class="container-group mt-2"><!--realizar comentario-->
                        <form action="/comentarios/comentar/{{$envio->id}}" method="post">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="form-group">
                                <input name="texto" class="form-control form-control-sm" placeholder="Escreva seu comentário" />
                                <input type="hidden" name="usuario" value=103 />
                            </div>
                            <button class="btn btn-primary btn-sm" type="Submit">Enviar</button>
                        </form>
                    </div><!--realizar comentario-->
                </div>    
            </div>





        </div>
    </div>
</div>

@include('layout.partials.footer')
    
@endsection
<b></b>