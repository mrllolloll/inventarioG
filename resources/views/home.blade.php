@extends('layouts.app')

@section('content')
@if($errors->has('nommodul'))
<style media="screen">
  .arre{
    margin-top: -20px;
    margin-bottom: 20px;
  }
</style>
<section class="arre row container-fluid">
  <section class="co-md-12 bg-danger">
    {{$errors->first('nommodul')}}
  </section>
</section>
@endif
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
