<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Uf;

class UfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(){
      $ufs = Uf::all();
      return view('ufs')->with('ufs', $ufs);
    }

    public function novo(){
      return view('forms.ufs');
    }

    public function create(Request $request){
      try {
        $data = $request->all();
        Uf::create($data);
        return redirect('/ufs/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function get($id){
      $ufs = Uf::find($id);
      return view('forms.ufedit')->with('ufs', $ufs);
    }

    public function atualiza(Request $request, $id){
      try {
        $uf = Uf::find($id)->update($request->all());
        return redirect('/ufs/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function delete($id){
      Uf::find($id)->delete();
      return redirect('/ufs/listar');
    }

}
