@extends('TableC.modalagracamp', ['idmodal'=>"agreinfo"])
@section('titlemodal','Desea agregar informacion?')
@section('contentmodal')
<form  method="POST" class="form-horizontal" role="form" method="post" action="{{url('tablerecurses')}}">
  {{ csrf_field() }}
  <section class="form-group">
    <label for="nommodulid" class="col-md-4">Ingrese nombre del modulo</label>
    <section Class="col-md-8">
      <input id="nommodulid" type="text" name="nommodul" class="form-control" placeholder="Ejemplo: Direcciones">
    </section>
  </section>
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-primary">
        Registrar
      </button>
    </section>
  </section>
</form>
@endsection
