<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Envios;
use cerebro\Http\Controllers\PalavrasChaveController;
use cerebro\Http\Controllers\ComentariosController;

class EnviosController extends Controller{

    public function index(){
        $envios = Envios::all();
        return view('envios/index')->with('envios', $envios);
    }

    public function find($grupo){

        $envios = Envios::where('id_grupo', $grupo)
        ->orderBy('created_at', 'asc')
        ->get();

        // $reposta = Envios::find($id);
        
        $palavrasChave = new PalavrasChaveController();
        $comentariosController = new ComentariosController();

        foreach($envios as $envio){
            $envio['palavras'] = $palavrasChave->findByEnvio($envio->id);
            $envio['comentarios'] = $comentariosController->findAll($envio->id);
        }        
        // $palavras = $palavrasChave->findByEnvio($reposta->id);

        
        // $comentarios = $comentariosController->findAll($id);

        return $envios;
    }

    public function novo(){
        return view('envios.form_new');
    }

    public function insert(){ 
        $retorno = Envios::create(Request::all());
        $this->salvarPalavras(Request::input('palavrasChave'),$retorno->id);

        return redirect()->action('EnviosController@index')
        ->withInput(Request::only('assunto'));
    }

    public function delete($id){
        Envios::find($id)->delete();
        return redirect()->action('EnviosController@index');
    }

    public function update($id){
        Envios::where('id',$id)
        ->update([
            'assunto' => Request::input('assunto'),
            'info' => Request::input('info'),
            'tipo' => Request::input('tipo')
            ]);
        $this->salvarPalavras(Request::input('palavrasChave'),$id);
        return redirect()->action('EnviosController@index');
    }

    public function alterar($id){
        $envio = Envios::find($id);
        return view('envios.form_update')->with('envio', $envio);
    }

    public function salvarPalavras($palavras, $envio){
        $palavrasChave = new PalavrasChaveController();
        $palavrasChave->salvarPalavras($palavras, $envio);
    }
}
