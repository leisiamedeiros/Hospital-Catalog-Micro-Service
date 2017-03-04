<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pesquisar', 'EstabelecimentoParse@pesquisa');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/publico', function(){
  return "Hello";
});

Route::group(['prefix'=>'estabelecimentos'], function(){
  Route::get('listar', 'EstabelecimentoController@listar');
  Route::get('novo', 'EstabelecimentoController@novo');
  Route::post('create', 'EstabelecimentoController@create');
  Route::get('/{id}/edita', 'EstabelecimentoController@get');
  Route::put('/{id}/edita', 'EstabelecimentoController@atualiza')
    ->name('estabelecimento.atualizar');
  Route::get('apagar/{id}', 'EstabelecimentoController@delete');
});

Route::group(['prefix'=>'municipios'], function(){
  Route::get('listar', 'MunicipioController@listar');
  Route::get('novo', 'MunicipioController@novo');
  Route::post('create', 'MunicipioController@create');
  Route::get('/{id}/edita', 'MunicipioController@get');
  Route::put('/{id}/edita', 'MunicipioController@atualiza')
    ->name('municipio.atualizar');
  Route::get('apagar/{id}', 'MunicipioController@delete');
});

Route::group(['prefix'=>'gestoes'], function(){
  Route::get('listar', 'TipoGestaoController@listar');
  Route::get('novo', 'TipoGestaoController@novo');
  Route::post('create', 'TipoGestaoController@create');
  Route::get('/{id}/edita', 'TipoGestaoController@get');
  Route::put('/{id}/edita', 'TipoGestaoController@atualiza')
    ->name('gestoes.atualizar');
  Route::get('apagar/{id}', 'TipoGestaoController@delete');
});

Route::group(['prefix'=>'ufs'], function(){
  Route::get('listar', 'UfController@listar');
  Route::get('novo', 'UfController@novo');
  Route::post('create', 'UfController@create');
  Route::get('/{id}/edita', 'UfController@get');
  Route::put('/{id}/edita', 'UfController@atualiza')
    ->name('ufs.atualizar');
  Route::get('apagar/{id}', 'UfController@delete');
});
