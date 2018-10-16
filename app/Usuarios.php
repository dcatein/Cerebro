<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    
    protected $fillable = array('nome','idade','email','senha','tipo');
    protected $guarded = ['id'];
}
