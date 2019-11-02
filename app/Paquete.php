<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'paquete';

    protected $fillable = [
        'id_paquete', 'contenido', 'peso', 'precio', 'fecha_recepcion', 'fecha_entrega', 'users_id', 'origen_id_origen', 'destino_id_origen',
    ];

    protected $primaryKey = 'id_paquete';

    public $timestamps = false;
}
