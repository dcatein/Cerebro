<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Usuarios;

class UsuariosController extends Controller{
    
    public function index(){
        $usuarios = Usuarios::all();
        return view('usuarios/index')->with('usuarios', $usuarios);
    }

    public function find($id){
        $reposta = Usuarios::find($id);

        if (empty($reposta)){
            return 'Dado inexistente';
        }
        return view('usuarios/show')->with('usuario',$reposta);
    }

    public function novo(){
        return view('usuarios.form_new');
    }

    public function insert(){
        Usuarios::create(Request::all());
        return redirect()->action('UsuariosController@index')
        ->withInput(Request::only('nome'));
    }

    public function delete($id){
        Usuarios::find($id)->delete();
        return redirect()->action('UsuariosController@index');
    }

    public function update($id){
        // $usuario = new Usuarios();

        Usuarios::where('id',$id)
        ->update([
            'nome' => Request::input('nome'),
            'email' => Request::input('email'),
            'idade' => Request::input('idade'),
            'senha' => Request::input('senha'),
            'tipo' => Request::input('tipo')
            ]);

        return redirect()->action('UsuariosController@index');
    }

    public function alterar($id){
        $usuario = Usuarios::find($id);
        return view('usuarios.form_update')->with('usuario', $usuario);
    }
}
