<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta';

    protected $fillable = [
        'id_account', 'rango', 'users_id',
    ];

    protected $primaryKey = 'id_account';

    public $timestamps = false;
}
