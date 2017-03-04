@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo</div>
                <form action="/estabelecimentos/create" method="post">
                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                  <div class="form-group">
                    <label>Cnes</label>
                    <input name="cnes" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Razao Social</label>
                    <input name="razaoSocial" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Municipio</label>
                    <input name="municipio" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Tipo Gestao</label>
                    <input name="tipoGestao" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Atende Sus</label>
                    <input name="atendeSus" class="form-control"/>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
