<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    protected $table = 'origen';

    protected $fillable = [
        'id_origen', 'descripcion', 'lugar',
    ];

    protected $primaryKey = 'id_origen';

    public $timestamps = false;
}
