@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Estabelecimentos</div>
            </div>
            <a href="/estabelecimentos/novo" class="btn btn-primary">Novo</a>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                  <th>Cnes</th>
                  <th>Nome</th>
                  <th>Razao Social</th>
                  <th>COD Município</th>
                  <th>Tipo Gestão</th>
                  <th>Atende sus?</th>
                  <th>Ação</th>
                </tr>
                @foreach ($estabelecimentos as $e )
                <tr>
                  <td> {{$e->cnes}} </td>
                  <td> {{$e->nome}} </td>
                  <td> {{$e->razaoSocial}} </td>
                  <td> {{$e->municipio}} </td>
                  <td> {{$e->tipoGestao}} </td>
                  @if($e->atendeSus > 0)
                    <td> Sim </td>
                  @else
                    <td> Não </td>
                  @endif
                  <td>
                    <a href="{{ action('EstabelecimentoController@get', $e->id) }}">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{ action('EstabelecimentoController@delete', $e->id) }}">
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
