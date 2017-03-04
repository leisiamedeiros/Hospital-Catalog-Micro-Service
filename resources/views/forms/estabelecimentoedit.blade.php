@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar estabelecimento {{ $estabelecimento->nome}}</div>
            </div>
            <form action="{{ route('estabelecimento.atualizar', ['id' => $estabelecimento->id]) }}" method="post">
              <input name="_method" type="hidden" value="PUT">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <div class="form-group">
                <label>Cnes</label>
                <input name="cnes" class="form-control" value="{{$estabelecimento->cnes}}"/>
              </div>
              <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control" value="{{$estabelecimento->nome}}"/>
              </div>
              <div class="form-group">
                <label>Razao Social</label>
                <input name="razaoSocial" class="form-control" value="{{$estabelecimento->razaoSocial}}"/>
              </div>
              <div class="form-group">
                <label>Municipio</label>
                <input name="municipio" class="form-control" value="{{$estabelecimento->municipio}}"/>
              </div>
              <div class="form-group">
                <label>Tiop Gestao</label>
                <input name="tipoGestao" class="form-control" value="{{$estabelecimento->tipoGestao}}"/>
              </div>
              <div class="form-group">
                <label>Atende Sus</label>
                <input name="atendeSus" class="form-control" value="{{$estabelecimento->atendeSus}}"/>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
