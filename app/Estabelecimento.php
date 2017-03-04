<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    //tabela associada ao modelo
    protected $table = 'estabelecimentos';

    //permissao de inserção de argumentos em massa
    protected $fillable = ['cnes', 'nome', 'razaoSocial', 'municipio',
      'tipoGestao', 'atendeSus',
    ];

    //definindo o relacionamento
    public function municipio(){
      return $this->belongsTo('App\Municipio', 'municipio');
    }

    public function tipoGestao(){
      return $this->belongsTo('App\TipoGestao', 'tipoGestao');
    }

}
