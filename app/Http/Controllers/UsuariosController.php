<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class UsuariosController extends Controller{
    
    public function index(){
        $usuarios = DB::select('select * from usuarios');

        return view('usuarios/index')->with('usuarios', $usuarios);
    }

    public function find($id){
        // $id = Request::route('id');
        $reposta = DB::select('select * from usuarios where id = ?', [$id]);

        if (empty($reposta)){
            return 'Dado inexistente';
        }
        return view('usuarios/show')->with('usuario',$reposta[0]);
    }
}
