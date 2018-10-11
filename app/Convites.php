<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class Convites extends Model
{
    protected $table = 'convites';
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    
    protected $fillable = array('created_at','updated_at','id_grupo','id_usuario');
    protected $guarded = ['id'];
}
