<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $table = 'viaje';

    protected $fillable = [
        'id_viaje', 'reserva', 'ruta_id_ruta', 'users_id',
    ];

    protected $primaryKey = 'id_viaje';

    public $timestamps = false;
}
