@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">UFS</div>
            </div>
            <a href="/ufs/novo" class="btn btn-primary">Novo</a>
            <table class="table table-striped table-bordered table-hover">
              <tr>
                <th>Sigla</th>
                <th>Nome</th>
                <th>Ação</th>
              </tr>
                @foreach ($ufs as $u)
                <tr>
                  <td> {{$u->sigla}} </td>
                  <td> {{$u->nome}} </td>
                  <td>
                    <a href="{{ action('UfController@get', $u->id) }}">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{ action('UfController@delete', $u->id) }}">
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
