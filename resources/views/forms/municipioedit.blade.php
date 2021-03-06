@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar municipio {{ $municipios->nome}}</div>
            </div>
            <form action="{{ route('municipio.atualizar', ['id' => $municipios->id]) }}" method="post">
              <input name="_method" type="hidden" value="PUT">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <div class="form-group">
                <label>Codigo</label>
                <input name="codigo" class="form-control" value="{{$municipios->codigo}}"/>
              </div>
              <div class="form-group">
                <label>UF</label>
                <input name="uf" class="form-control" value="{{$municipios->uf}}"/>
              </div>
              <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control" value="{{$municipios->nome}}"/>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
