<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = 'destino';

    protected $fillable = [
        'id_destino', 'descripcion', 'lugar',
    ];

    protected $primaryKey = 'id_destino';

    public $timestamps = false;

}
