@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo</div>
                <form action="/ufs/create" method="post">
                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                  <div class="form-group">
                    <label>Sigla</label>
                    <input name="sigla" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control"/>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
