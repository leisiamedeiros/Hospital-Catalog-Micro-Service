<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $table = "ufs";

    protected $fillable = ['sigla', 'nome'];
}
