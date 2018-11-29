<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Envios;
use cerebro\Grupos;
use cerebro\Http\Controllers\PalavrasChaveController;
use cerebro\Http\Controllers\ComentariosController;

class EnviosController extends Controller{

    public function index(){
        $envios = Envios::all();
        return view('envios/index')->with('envios', $envios);
    }

    public function find($grupo){

        $envios = Envios::where('id_grupo', $grupo)
        ->orderBy('created_at', 'desc')
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
        $envio = Envios::find($id);

        Envios::find($id)->delete();

        return redirect()->action('GruposController@find',$envio->id_grupo);


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

    public function detalhes($envio){
        $envio = Envios::find($envio);
        
        $palavrasChave = new PalavrasChaveController();
        $comentariosController = new ComentariosController();
        $envio['palavras'] = $palavrasChave->findByEnvio($envio->id);
        $envio['comentarios'] = $comentariosController->findAll($envio->id);
        
        return view('envios.show')->with('envio',$envio);    
    }

    public function postar($grupo){
        $envio = new Envios();
        $envio->assunto = Request::input('assunto');
        $envio->info = Request::input('info');
        $envio->created_at = now();
        $envio->id_grupo = $grupo;
        $envio->tipo = 0;
        $envio->save();
        $palavras = Request::input('palavras');
        $this->salvarPalavras($palavras, $envio->id);

        return redirect()->action('EnviosController@detalhes', ['envio' => $envio->id]);
    }
}
