<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produto extends Eloquent
{
    //adicionar a connection 
    protected $connection = 'mongodb';

    //adicionar a collection
    protected $collection = 'produto';

    protected $fillable = [
        'nome',
        'descricao',
        'valor'
    ];

    protected $guarded = [
        'id',
    ];

}
