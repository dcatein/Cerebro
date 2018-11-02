<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Comentarios;
use cerebro\Http\Controllers\UsuariosController;

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
}
