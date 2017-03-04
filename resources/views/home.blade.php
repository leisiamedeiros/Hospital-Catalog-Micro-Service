@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <form class="form-search" method="get" action="/pesquisar" >
                      <div class="col-lg-6">
                        <div class="input-group">
                          <input type="text" name="nome" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                          </span>
                        </div>
                      </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
