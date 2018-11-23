<?php

namespace cerebro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class PerfilController extends Controller{
    
    public function index(){
        return view('perfil.perfil');
    }
}
