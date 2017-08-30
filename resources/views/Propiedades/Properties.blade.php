@extends('TableC.modelex',['ifmodal'=>"PropertiesIS","titsle"=>"TitleProperties","yolo"=>"SectionProperties"])
@section('TitleProperties','Creacion y Lista de propiedades');
@section('SectionProperties')
<div class="row">
  <div class="col-md-12">
      <center><h3>Creacion de restricciones</h3></center>
  </div>
</div>
<br>
<form class="form-inline" action="{{url('RestricTable')}}" method="post">
    {{ csrf_field() }}
    <div class="row" style="background-color:rgb(252, 252, 252);">
      <div class="form-group col-xs-6">
        <div class="row">
          <label class="col-xs-4" >Modulo:</label>
          <select name="ModulNombEncont" class="form-control col-xs-8" id="ModulNombEncont" required>
              <option value="" class="hide">selecciona una opción</option>
            @foreach($titutable as $Y)
              @if($Y->nombclum=="Dual")
              <option value="{{$Y->id}}">{{$Y->nomtable}}</option>
              @endif
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group col-xs-6">
        <div class="row">
          <label class="col-xs-7">Opcion objetivo:</label>
              <div id="Optione" class="col-xs-8">
                n/a
              </div>
        </div>
      </div>
  </div>
  <br>
  <div class="row" style="background-color:rgb(252, 252, 252);">
    <div class="form-group col-xs-6">
      <div class="row">
        <label class="col-xs-5">Modulo Afectado:</label>
        <select name="ModulAfect" class="form-control col-xs-7" id="ModulNombEncont1" required>
          <option value="" class="hide">selecciona una opción</option>
          @foreach($titutable as $Y)
              <option value="{{$Y->id}}">{{$Y->nomtable}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group col-xs-6">
      <div class="row">
        <label class="col-xs-7">Opcion Default:</label>
        <div id="yort" class="col-xs-7">
          n/a
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12 checkbox">
      <label for="VerifCheck">Opcion por default vacia:      <input id="VerifCheck" type="checkbox" ></label>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-12">
      <center>
      <button class="btn btn-blanco-modal">
        Registrar
      <div class="ripple-container"></div></button>
    </center>
    </div>
  </div>
</form>
<br>
<div class="row">
  <div class="col-md-12" style="background-color:rgb(252, 252, 252);">
      <center><h3>Restricciones</h3></center>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <section class="table-responsive col-xs-5 col-sm-12 col-md-12">
      <table id="my-table" class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>Modulo</th>
            <th>Opcion objetivo</th>
            <th>Modulo Afectado</th>
            <th>Opcion Default</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tableRes as $T)
            <tr>
              <?php $Campostbale=DB::table('camptables')->where('id', $T->camptables_id)->first() ?>
              <td>{{$Campostbale->nomtable}}</td>
              <?php $ObjRes=DB::table('tab_'.CasoSelet101($Campostbale->nomtable))->where('id', $T->objetive_id)->first() ?>
              <td>{{$ObjRes->info}}</td>
              <?php $Opj=DB::table('camptables')->where('id', $T->afected_camptables_id)->first()?>
              <td>{{$Opj->nomtable}}</td>
              <?php if ($Opj->nombclum=="Dual" & $T->default_option!="") {
                 $ObjRes1=DB::table('tab_'.CasoSelet101($Opj->nomtable))->where('id', $T->default_option)->first();
                 echo "<td>".$ObjRes1->info."</td>";
              }else {
                echo "<td>n/a</td>";
              }?>
              <td><a href="#" type="button" class="btn btn-eliminar btn-xs" data-toggle='modal' data-target='#BorrProperties' onclick="ondeletfs('{{route('Destroid.destroy',base64_encode($T->id))}}','{{$T->camptables_id}}',)"> Eliminar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <br>
    </section>
  </div>
</div>
<script>
function UpdateOption(Value1){
        $.ajax({
                data:  Value1,
                url:   '/Optiones/'+Value1+'/ObpObjetive/false',
                type:  'get',
                beforeSend: function () {
                        $("#Optione").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#Optione").html(response);
                }
        });
}

function UpdateOption1(Value1,Value2){
        $.ajax({
                data:  Value1,
                url:   '/Optiones/'+Value1+'/OptDefault/'+Value2,
                type:  'get',
                beforeSend: function () {
                        $("#yort").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#yort").html(response);
                }
        });
}

$(document).ready(function(){
  $("#ModulNombEncont").click(function(){
    if ($(this).val()!="") {
        UpdateOption($(this).val());
    }
  });

  $("#ModulNombEncont1").click(function(){
    if ($(this).val()!="") {
      if (!$('#VerifCheck').is(':checked')) {
        UpdateOption1($(this).val(),'false');
        $('#VerifCheck').removeAttr("disabled");
      }
    }
  });


  $("#VerifCheck").attr('disabled', 'disabled');

  $('#VerifCheck').click(function(){
    if ($("#ModulNombEncont1").val()!=""){
      UpdateOption1($("#ModulNombEncont1").val(),$(this).is(':checked'));
    }
    });

    @if(isset($_GET['msodal']))
      $('#Butonrestriction').trigger('click');
    @endif
});

</script>
@endsection
