<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Convites;
use cerebro\Usuarios;
use cerebro\Grupos;
use cerebro\Http\Controllers\GruposController;
use cerebro\GruposUsuarios;
use cerebro\Http\Controllers\UsuariosController;

class ConvitesController extends Controller{
    public function insert($grupo){
        $email = Request::input('email');
        $grupoFind = Grupos::find($grupo);
        $usuario = Usuarios::where('email','like',$email)->get();
        
        if($this->verificarConvite($usuario[0]->id, $grupo) || $this->verificarGrupos($usuario[0]->id, $grupo)){

            return redirect()->action('GruposController@find', ['grupo' => $grupoFind]);    
        }
        
        $convite = new Convites();
        $convite->email = $email;
        $convite->id_grupo = $grupo;
        $convite->save();
        $grupoFind->conviteResposta = 'Sucesso';

        return redirect()->action('GruposController@find', ['grupo' => $grupoFind]);
    }

    public function findByEmail($email){
       $convites = Convites::where('email','like',$email)->get();
       
       $grupoController = new GruposController();

        foreach ($convites as $convite) {
            $grupo = $grupoController->findById($convite->id_grupo);
            $convite->grupo = $grupo->nome;
        }

       return $convites;
    }


    public function aceitarConvite($id){
        $convite = Convites::find($id);
        $usuario = Usuarios::where('email','like',$convite->email)->get();
        
        $usuarioController = new UsuariosController();

        if($this->verificarGrupos($usuario[0]->id, $convite->id_grupo)){
            Convites::find($id)->delete();

            return redirect()->action('UsuariosController@find', $usuario[0]->id);

        }else{
            $gruposUsuarios = new GruposUsuarios();
            $gruposUsuarios->id_usuario = $usuario[0]->id;
            $gruposUsuarios->id_grupo = $convite->id_grupo;
            $gruposUsuarios->save();
            Convites::find($id)->delete();

            return redirect()->action('UsuariosController@find', $usuario[0]->id);
        }
    }

    public function recusarConvite($id){
        $convite = Convites::find($id);
        $usuario = Usuarios::where('email','like',$convite->email)->get();
        $convite->delete();
     
        return redirect()->action('UsuariosController@find', $usuario[0]->id);
    }

    public function verificarGrupos($usuario, $grupo){
        $resposta = GruposUsuarios::where('id_usuario','=',$usuario)
        ->where('id_grupo','=',$grupo)->first();

        if(empty($resposta)){
            return false;
        }else{
            return true;
        }
    }

    public function verificarConvite($usuario, $grupo){
        $resposta = Convites::where('id_usuario','=',$usuario)
        ->where('id_grupo','=',$grupo)->first();

        if(empty($resposta)){
            return false;
        }else{
            return true;
        }
    }
}
