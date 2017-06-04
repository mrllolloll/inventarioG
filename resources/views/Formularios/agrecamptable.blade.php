@extends('TableC.modalagracamp',['idmodal'=>"AgreCamp1"])
@section('titlemodal','Desea agregar un modulo?')
@section('contentmodal')
<form  method="POST" class="form-horizontal" role="form" method="post" action="{{url('tablerecurses')}}">
  {{ csrf_field() }}
  <section class="form-group" id="secModal">
    <label for="nommodulid" class="col-md-4"  id="FontsModal">Ingrese nombre del modulo</label>
    <section Class="col-md-8">
      <input id="nommodulid" type="text" name="nommodul" class="form-control inptModal" placeholder="Ejemplo: Direcciones" required>
    </section>
  </section>
  <section class="form-group"  id="secModal">
    <label for="proyectid" class="col-md-4" id="FontsModal">Tipo de modulo:</label>
    <section class="col-md-8">
      <select  id="selecto" class="select form-control col-md-4 cmbModal" name="objet" required>
        <option value=""  id="FontsModal">Seleccione una opción.</option>
        <option value="Fecth" id="FontsModal">Fechas</option>
        <option value="text" id="FontsModal">Texto</option>
        <option value="number" id="FontsModal">Numeros </option>
        <option value="Dual" id="FontsModal">Dual </option>
      </select>
    </section>
  </section>
  <section class="form-group" id="ocult">
    <section class="col-md-8">
        <input type="checkbox" id="cbox0" name="Fechaauto" value="true" class="inputFecha"> <label for="cbox0"  id="FontsModal">Fecha automatica por registro.</label>
    </section>
  </section>
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-blanco-modal" id="FontsModal">
        Registrar
      </button>
    </section>
  </section>
</form>
<script type="text/javascript">
$("#ocult").hide(0);
$("#selecto").click(function(){
  var combo = document.getElementById("selecto");
  var selected = combo.options[combo.selectedIndex].text;
  if (selected!="Fechas") {
    $("#ocult").hide(300);
    $('#cbox0').prop('checked', false);
  }else {
    $("#ocult").show(300);
  }
});
</script>
@endsection
<!-- En nombre de Dios todo saldra bien que se haga tu voluntad y no la mia-->
