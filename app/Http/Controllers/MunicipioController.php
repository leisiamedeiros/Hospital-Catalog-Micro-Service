<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio;

class MunicipioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(){
      $municipios = Municipio::all();
      return view('municipios')->with('municipios', $municipios);
    }

    public function novo(){
      return view('forms.municipio');
    }

    public function create(Request $request){
      try {
        $data = $request->all();
        Municipio::create($data);
        return redirect('/municipios/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function get($id){
      $municipios = Municipio::find($id);
      return view('forms.municipioedit')->with('municipios', $municipios);
    }

    public function atualiza(Request $request, $id){
      try {
        $municipio = Municipio::find($id)->update($request->all());
        return redirect('/municipios/listar');
      } catch (\Exception $e) {
        return response()->json($e,200);
      }
    }

    public function delete($id){
      Municipio::find($id)->delete();
      return redirect('/municipios/listar');
    }
}
