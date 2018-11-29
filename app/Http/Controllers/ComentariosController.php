<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Comentarios;
use cerebro\Grupos;
use cerebro\Envios;
use cerebro\Http\Controllers\UsuariosController;
use cerebro\Http\Controllers\EnviosController;
use cerebro\Http\Controllers\GruposController;


class ComentariosController extends Controller{
    
    public function findAll($envio){
        $comentarios = Comentarios::where('id_envio', $envio)
        ->orderBy('created_at', 'desc')
        ->get();

        $usuariosController = new UsuariosController();

        foreach($comentarios as $comentario){
            $comentario['usuario'] = $usuariosController->findUsuarioNome($comentario->id_usuario);
        }

        return $comentarios;
    }
    public function find($id){
        

        $envios = $this->envios($id);
        if (empty($envios)){
            return 'Dado inexistente';
        }

        return view('grupos/show/comentarios')->with('grupo',[
            'envios' => $envios
            ]);
    }


    public function comentar($envio){
        $envios = Envios::find($envio);
        
        $comentario = new Comentarios();
        $comentario->texto = Request::input('texto');
        $comentario->created_at = now();
        $comentario->id_envio = $envios->id;
        $comentario->id_usuario = Request::input('usuario');;
        $comentario->save();

        return redirect()->action('EnviosController@detalhes', ['envio' => $envios->id]);
    }

    public function delete($comentario){
            $entity = Comentarios::find($comentario);
            $envio_id = $entity->id_envio; 
            $entity->delete();

            return redirect()->action('EnviosController@detalhes', ['envio' => $envio_id]);
    }
}
