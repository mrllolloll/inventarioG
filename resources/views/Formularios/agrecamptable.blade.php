@extends('TableC.modalagracamp')
@section('titlemodal')
Desea agregar un modulo?
@endsection
@section('contentmodal')
<form action="controlclient.php" method="POST" class="form-horizontal" role="form" method="{{url('tablerecurses')}}">
  {{ csrf_field() }}
  <section class="form-group">
    <label for="nombpid" class="col-md-4">Nombre del proyecto:</label>
    <section Class="col-md-8">
      <input id="nombpid" type="text" name="nombpro" class="form-control" placeholder="Ingrese un nombre a su proyecto">
    </section>
  </section>
  <section class="form-group">
    <label for="proyectid" class="col-md-4">Detalles del proyecto:</label>
    <section class="col-md-8">
      <textarea id="proyectid" name="detapro" class="form-control" placeholder="Ingrese con detalle el proyecto que quiere que realizemos"></textarea>
    </section>
  </section>
  <section class="form-group">
    <label for="tempid" class="col-md-4">Tiempo:</label>
    <section class="col-md-8">
      <input id="tempid" type="date"  name="Tiempo" class="form-control" placeholder="Ingrese el tiempo que dispone para la entrega del proyecto">
    </section>
  </section>
  <input type="hidden" name="shadow1" value="olc2">
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-primary">
        Registrar
      </button>
    </section>
  </section>
</form>
@endsection
