@extends('layout.mainlayout')
    @section('content')

oi                        
@foreach ($grupo['envios'] as $envio)

                            @foreach($comentarios as $comentario)
                            <p>{{$comentario->usuario}}</p>
                                <p>{{$comentario->texto}}</p>
                            @endforeach
                            @endforeach

   @endsection
    <b></b>