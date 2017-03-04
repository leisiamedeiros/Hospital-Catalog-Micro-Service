<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGestao extends Model
{
    protected $table = "tipo_gestaos";

    protected $fillable = ['codigo', 'nome'];
}
