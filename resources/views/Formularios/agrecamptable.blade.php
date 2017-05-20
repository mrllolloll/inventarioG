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
<<<<<<< HEAD
      <input id="nommodulid" type="text" name="nommodul" class="form-control" placeholder="Ejemplo: Direcciones" required>
=======
      <input id="nombpid" type="text" name="nombpro" class="form-control" placeholder="Ingrese un nombre a su proyecto">
>>>>>>> parent of 912fca3... vistas y Varios controladores
    </section>
  </section>
  <section class="form-group">
    <label for="proyectid" class="col-md-4">Detalles del proyecto:</label>
    <section class="col-md-8">
<<<<<<< HEAD
      <select id="selecto" class="select" name="objet" required>
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
=======
      <textarea id="proyectid" name="detapro" class="form-control" placeholder="Ingrese con detalle el proyecto que quiere que realizemos"></textarea>
    </section>
  </section>
  <section class="form-group">
    <label for="tempid" class="col-md-4">Tiempo:</label>
    <section class="col-md-8">
      <input id="tempid" type="date"  name="Tiempo" class="form-control" placeholder="Ingrese el tiempo que dispone para la entrega del proyecto">
>>>>>>> parent of 912fca3... vistas y Varios controladores
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
