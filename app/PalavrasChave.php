<?php

namespace cerebro;

use Illuminate\Database\Eloquent\Model;

class PalavrasChave extends Model
{
    protected $table = 'palavrasChave';
    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    
    protected $fillable = array('created_at','updated_at','palavra','envio');
    protected $guarded = ['id'];
}
