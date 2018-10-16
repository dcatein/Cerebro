<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\PalavrasChave;

//TODO: Formular um delete para Palavras-Chave

class PalavrasChaveController extends Controller{

    public function salvarPalavras($palavras, $envio){
        $array_palavras = explode(';', $palavras);

        for ($i=0; $i < count($array_palavras); $i++) { 
            if(empty($array_palavras[$i]) || $array_palavras[$i] == " "){
                unset($array_palavras[$i]);
            }
        }

        foreach ($array_palavras as $palavra){
            $palavrasChave = new PalavrasChave();
            
            $palavrasChave->palavra = $palavra;
            $palavrasChave->envio = $envio;

            $palavrasChave->save();
        }
    }

    public function findByEnvio($envio){
        $resposta = PalavrasChave::where('envio','=', $envio)->get();        
        return $resposta;
    }
}
