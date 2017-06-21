@extends('TableC.modelex',['ifmodal'=>"borr12","titsle"=>"deletes1","yolo"=>"sectionde1"])
@section('deletes1','¿Esta seguro quiere realizar esta accion?')
@section('sectionde1')
<form action="" id="FormDelete1" method="POST">
    {{csrf_field()}}
      <center><h3>¿Esta seguro que desea borrar este Modulo?</h3></center>
      <center><h4>Nota: se borrara toda la informacion asociada </h4></center>
      <center><input type="submit" class="btn btn-eliminar btn-xs" id="modalLateralE" style="color:white;"  value="Eliminar"></center>
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="bool" value="" class="booll">
</form>
@endsection
