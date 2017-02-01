@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <aside class="col-md-2">
          @include('TableC.lateralbart')
      </aside>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Tabla de Administracion</div>
                <div class="panel-body">
                    @include('TableC.tablecentral')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
