<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'ruta';

    protected $fillable = [
        'id_ruta', 'tiempo', 'precio', 'espacio', 'distancia', 'origen_id_origen', 'destino_id_destino',
    ];

    protected $primaryKey = 'id_ruta';

    public $timestamps = false;

}
