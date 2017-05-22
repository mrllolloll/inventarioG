@extends('TableC.modalagracamp',['idmodal'=>"AgreCamp1"])
@section('titlemodal','Desea agregar un modulo?')
@section('contentmodal')
<form  method="POST" class="form-horizontal" role="form" method="post" action="{{url('tablerecurses')}}">
  {{ csrf_field() }}
  <section class="form-group">
    <label for="nommodulid" class="col-md-4">Ingrese nombre del modulo</label>
    <section Class="col-md-8">
      <input id="nommodulid" type="text" name="nommodul" class="form-control" placeholder="Ejemplo: Direcciones" required>
    </section>
  </section>
  <section class="form-group">
    <label for="proyectid" class="col-md-4">Tipo de modulo:</label>
    <section class="col-md-8">
      <select  id="selecto" class="select form-control col-md-4" name="objet" required>
        <option value="">Seleccione una opción.</option>
        <option value="Fecth">Fechas</option>
        <option value="text">Texto</option>
        <option value="number">Numeros </option>
        <option value="Dual">Dual </option>
      </select>
    </section>
  </section>
  <section class="form-group" id="ocult">
    <section class="col-md-8">
        <input type="checkbox" id="cbox0" name="Fechaauto" value="true"> <label for="cbox0">Fecha automatica por registro.</label>
    </section>
  </section>
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-blanco-modal">
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
