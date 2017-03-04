@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Municipios</div>
            </div>
            <a href="/municipios/novo" class="btn btn-primary">Novo</a>
            <table class="table table-striped table-bordered table-hover">
              <tr>
                <th>Codigo</th>
                <th>UF</th>
                <th>Nome</th>
                <th>Ação</th>
              </tr>
                @foreach ($municipios as $m )
                <tr>
                  <td> {{$m->codigo}} </td>
                  <td> {{$m->uf}} </td>
                  <td> {{$m->nome}} </td>
                  <td>
                    <a href="{{ action('MunicipioController@get', $m->id) }}">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{ action('MunicipioController@delete', $m->id) }}">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
