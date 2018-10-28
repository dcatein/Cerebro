<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class NavController extends Controller{
    
    public function perfil(){
//        return view('perfil.index');
    }

    public function principal(){
        return view('index');
    }

    public function grupos(){
        return view('grupos.index');
    }
    
    public function planoestudo(){
  //      return view('planoestudo.index');
    }
    
    public function destaque(){
    //    return view('destaque.index');
    }

    public function sair(){
      //  return view('grupos.form_new');
    }
}
