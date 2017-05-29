@extends('TableC.modelex',['ifmodal'=>"borr11","titsle"=>"deletes","yolo"=>"sectionde"])
@section('deletes','¿Esta seguro quiere realizar esta accion?')
@section('sectionde')
<form  action='' id="FormDelete" method='POST'>
   {{csrf_field()}}
     <center><h3>¿Esta seguro que desea borrar este registro?</h3></center>
     <input type='hidden' name='_method' value='DELETE'>
     <center><input type='submit' class='btn btn-eliminar btn-xs' style="color:white;" value='Aceptar'></center>
 </form>
@endsection
