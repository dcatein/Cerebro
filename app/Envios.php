<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    protected $table = 'envios';
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    
    protected $fillable = array('created_at','updated_at','assunto','tipo','info');
    protected $guarded = ['id'];
}
