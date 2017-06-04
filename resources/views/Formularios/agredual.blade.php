@extends('TableC.modelex',['ifmodal'=>"agredual","titsle"=>"Titulo0","yolo"=>"section0"])
@section('Titulo0','Agregar datos en el modulo')
@section('section0')
<form class="form-horizotal" action="{{url('/agre')}}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="tool" value="" id="tool">
  <section class="form-group">
    <label for="dat" class="col-md-4">Ingresar datos:</label>
    <section Class="col-md-8">
      <input id="dat" type="text" name="datos1" class="form-control" required>
    </section>
  </section>';
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-blanco-modal">
        Registrar
      </button>
    </section>
  </section>
  <br>
</form>
@endsection
