@extends('layout.mainlayout')
    @section('content')
        <h1>{{$envio->assunto}}</h1>
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
                    <input type="hidden" name="usuario" value=103 /> <!-- Valor fixo por enquanto, pois não há Session -->
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
    @stop
