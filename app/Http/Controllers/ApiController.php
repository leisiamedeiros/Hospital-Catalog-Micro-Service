<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;
use App\Municipio;

class ApiController extends Controller
{
    public function criarEstabelecimentoRest(Request $request)
    {
      //noMunicipio nome estabelecimento
      $municipio = Municipio::where('nome', $request['noMunicipio'])->first();
      $codigo = $municipio->codigo;

      $booleano = 0;
      if ($request['atendeSus'] == 'S') {
        $booleano = 1;
      }
      try {
        Estabelecimento::updateOrCreate(['cnes' => $request['cnes']],[
          'cnes' => $request['cnes'],
          'nome'=> $request['noFantasia'],
          'razaoSocial'=> $request['noEmpresarial'],
          'municipio'=> $codigo,
          'tipoGestao'=> $request['gestao'],
          'atendeSus'=> $booleano,
        ]);
        return response()->json(['message'=>'OK!'], 200);
      } catch (\Exception $e) {
        return response()->json($e, 200);
      }
    }

}
