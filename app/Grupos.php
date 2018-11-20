<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table = 'grupos';
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    
    protected $fillable = array('created_at','updated_at','nome','descricao','classificacao');
    protected $guarded = ['id'];
}
