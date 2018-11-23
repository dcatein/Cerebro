<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Grupos;

class LoginController extends Controller{
    
    public function index(){
        return view('login');
    }

    public function entrar(){
		$grupos = Grupos::all();
        return redirect()->action('IndexController@index')->with('grupos', $grupos);    
    }
}
