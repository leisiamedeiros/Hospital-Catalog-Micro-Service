@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tipo Gestão</div>
            </div>
            <a href="/gestoes/novo" class="btn btn-primary">Novo</a>
            <table class="table table-striped table-bordered table-hover">
              <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Ação</th>
              </tr>
                @foreach ($tipogestao as $t)
                <tr>
                  <td> {{$t->codigo}} </td>
                  <td> {{$t->nome}} </td>
                  <td>
                    <a href="{{ action('TipoGestaoController@get', $t->id) }}">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{ action('TipoGestaoController@delete', $t->id) }}">
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
