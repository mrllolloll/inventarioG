@extends('TableC.modelex',['ifmodal'=>"BorrProperties","titsle"=>"deletesPr","yolo"=>"sectiondePr"])
@section('deletesPr','¿Esta seguro quiere realizar esta accion?')
@section('sectiondePr')
<form  action='' id="RestrictionDelete" method='POST'>
   {{csrf_field()}}
     <center><h3>¿Esta seguro que desea borrar esta restricción?</h3></center>
     <input type='hidden' name='_method' value='DELETE'>
     <input type='hidden' name='DI' class="Actiono">

     <center><input type='submit' class='btn btn-eliminar btn-xs' style="color:white;" value='Aceptar'></center>
 </form>
 <script>
 function ondeletfs(value,value1){
   $("#RestrictionDelete").attr('action',value);
   $(".Actiono").val(value1);
 }
 </script>
@endsection
