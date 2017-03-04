<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;

class EstabelecimentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(){
      $estabelecimentos = Estabelecimento::all();
      return view('estabelecimentos')->with('estabelecimentos', $estabelecimentos);
    }

    public function novo(){
      return view('forms.estabelecimento');
    }

    public function create(Request $request){
      try {
        $data = $request->all();
        Estabelecimento::create($data);
        return redirect('/estabelecimentos/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function get($id){
      $estabelecimento = Estabelecimento::find($id);
      return view('forms.estabelecimentoedit')->with('estabelecimento', $estabelecimento);
    }

    public function atualiza(Request $request, $id){
      try {
        $estabelecimento = Estabelecimento::find($id)->update($request->all());
        return redirect('/estabelecimentos/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function delete($id){
      Estabelecimento::find($id)->delete();
      return redirect('/estabelecimentos/listar');
    }

}
