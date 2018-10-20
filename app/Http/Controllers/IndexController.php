<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use cerebro\Grupos;

class IndexController extends Controller{
    
    public function index(){
        $grupos = Grupos::all();
        return view('index')->with('grupos', $grupos);
    }
}
