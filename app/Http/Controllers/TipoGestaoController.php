<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoGestao;

class TipoGestaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(){
      $tipogestao = TipoGestao::all();
      return view('tipogestao')->with('tipogestao', $tipogestao);
    }

    public function novo(){
      return view('forms.tipogestao');
    }

    public function create(Request $request){
      try {
        $data = $request->all();
        TipoGestao::create($data);
        return redirect('/gestoes/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function get($id){
      $tipogestao = TipoGestao::find($id);
      return view('forms.tipogestaoedit')->with('gestoes', $tipogestao);
    }

    public function atualiza(Request $request, $id){
      try {
        $tipogestao = TipoGestao::find($id)->update($request->all());
        return redirect('/gestoes/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function delete($id){
      TipoGestao::find($id)->delete();
      return redirect('/gestoes/listar');
    }
}
