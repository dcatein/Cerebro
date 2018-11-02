<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Grupos;

class GruposController extends Controller{
    
    public function index(){
        $grupos = Grupos::all();
        return view('grupos.index')->with('grupos', $grupos);
    }


    public function find($id){
        $reposta = Grupos::find($id);
        
        if (empty($reposta)){
            return 'Dado inexistente';
        }
        return view('grupos/show')->with('grupo',$reposta);
    }

    public function novo(){
        return view('grupos.form_new');
    }

    public function insert(){
        Grupos::create(Request::all());
        return redirect()->action('GruposController@index')
        ->withInput(Request::only('nome'));
    }

    public function delete($id){
        Grupos::find($id)->delete();
        return redirect()->action('GruposController@index');
    }

    public function update($id){
        Grupos::where('id',$id)
        ->update([
            'nome' => Request::input('nome'),
            'classificacao' => Request::input('classificacao')
            ]);

        return redirect()->action('GruposController@index');
    }

    public function alterar($id){
        $grupo = Grupos::find($id);
        return view('grupos.form_update')->with('grupo', $grupo);
    }

    public function convidarUsuario($id){
        $grupo = Grupos::find($id);
        return view('convites.form')->with('grupo',$grupo);
    }

    public function findById($id){
        return Grupos::find($id);
    }
}
