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


<div class="container-fluid pt-2 px-5">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md-10"><!--titulo-->
                    <h2 class="title"> {{$envio->assunto}}</h2>
                </div><!--titulo-->
                <div class="col-md"><!--botao voltar-->
                   <a href="{{action('GruposController@find',$envio->id_grupo)}}" title="Voltar" class="btn fnt-white"><i class="mt-2 ml-5 fa fa-reply icon-size-15"></i> Voltar</a>
                </div><!--botao voltar-->
            </div>
            
            <div class="row"><!--conteudo postagem-->
                <div class="col-md-10">
                    <div class="container-group mt-2">
                        <!--{{$envio->tipo}}-->
                        {{$envio->info}}
                        <!--{{$envio->classificacao}}-->
            


                    </div>
                </div>
            </div><!--conteudo postagem-->
            <div class="row"><!--subtitulo-->
                <div class="col-md-10">
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
                <div class="col-md-10">
                    <h6 class="title mt-2"> Comentários</h6>
                    @foreach($envio['comentarios'] as $comentario)
                        <div class="container-group mt-2">
                            <div class="content-comentario">
                                <span id="name">{{$comentario->usuario}}:</span> 
                                <span id="content">{{$comentario->texto}}</span>
                            </div>
                            <div class="footer-comentario">
                                <span id="date">{{date('d/m/Y H:i:s',strtotime($comentario->created_at))}}</span>
                                <i class="fa fa-close"></i>
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
    
@endsection
<b></b>