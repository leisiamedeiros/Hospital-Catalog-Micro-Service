<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Httpful\Request as HttpRequest;
use App\Estabelecimento;
use Illuminate\Support\Facades\Log;
use App\Municipio;

class EstabelecimentoParse
{

  public function pesquisa(Request $request)
  {
    $nome = $request['nome'];
    $url = 'API_ENDPOINT'.$nome;
    $response = \Httpful\Request::get($url)
    ->addHeader('User-Agent','')
    ->expectsJson()
    ->send();
    try {
      foreach ($response->body as $value)
      {
        $this->criarOuAtualizarMunicipio($value);
      }
      return redirect('/estabelecimentos/listar');
    } catch (\Exception $e) {
      return "Não Existe Municipio Cadastrado";
    }
  }

  public function criarOuAtualizarMunicipio($request){
    $municipio = Municipio::where('nome', $request->noMunicipio)->first();
    $codigo = $municipio->codigo;

    $booleano = 0;
    if ($request->atendeSus == 'S') {
      $booleano = 1;
    }

    Estabelecimento::updateOrCreate(['cnes' => $request->cnes],[
      'cnes' => $request->cnes,
      'nome'=> $request->noFantasia,
      'razaoSocial'=> $request->noEmpresarial,
      'municipio'=> $codigo,
      'tipoGestao'=> $request->gestao,
      'atendeSus'=> $booleano,
    ]);
  }

}
