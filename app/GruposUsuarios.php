<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class GruposUsuarios extends Model
{
    protected $table = 'grupos_usuarios';
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    
    protected $fillable = array('created_at','updated_at','id_grupo','id_usuario');
    protected $guarded = ['id'];
}
