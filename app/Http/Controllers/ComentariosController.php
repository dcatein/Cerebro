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
        ->orderBy('created_at', 'asc')
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

}
