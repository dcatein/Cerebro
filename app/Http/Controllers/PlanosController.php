<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class PlanosController extends Controller{
    
    public function index(){
       // $grupos = Grupos::all();
        return view('plano.index');
    }
}
