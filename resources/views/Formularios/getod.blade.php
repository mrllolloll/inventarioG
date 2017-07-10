@extends('TableC.modelex',['ifmodal'=>"Alo","titsle"=>"yoliyot","yolo"=>"vovo"])
@section('yoliyot','Busqueda personalizada para generar pdf')
@section('vovo')
<?php
function CasoSeletcx($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#param").hide();
    $("#horor").prop('checked', true);
    $(".selesc").val("1");
    $(".ValidationPdf").val("CHOR_STRUCK_ALL");
  });
  function OnClikParam(){
    if ($("#horor").prop('checked') == true ){
      $("#param").hide(200);
      $(".selesc").val("1");
      $(".ValidationPdf").val("CHOR_STRUCK_ALL");
    }else {
      $(".selesc").val("");
      $(".ValidationPdf").val("");
      $("#param").show(300);
    }
  }
  function SumOption(value){
    if ($('#'+value).prop('checked') == true ){
      $('.ddTT').val(parseInt($('.ddTT').val())+1);
    }else {
      $('.ddTT').val(parseInt($('.ddTT').val())-1);
    }

    if ($('.ddTT').val() > 6) {
      $('.BotonOcul').hide(300);
    }else {
      $('.BotonOcul').show(100);
    }
  }
  $(document).ready(function() {

  $('formPDF').keypress(function(e){   
    if(e == 13){
      return false;
    }
  });

  $('input').keypress(function(e){
    if(e.which == 13){
      return false;
    }
  });

});
</script>
<section class="table-responsive">
<form id="formPDF" class="form-horizontal" role="form" action="{{url('/pdf')}}" method="GET">
{{ csrf_field() }}
@if(isset($titutable))
    @if(isset($table))
      <?php
      $i1=0;
      echo "
      <div class='form-group'  id='param'>
      <div class='col-md-12'>
      <div class='col-md-2'>
        Buscar:
      </div>
      <div class='col-md-4'>
      <select name='ss' class='form-control selesc' required>
      <option value=''>Seleccionar una opcion</option>
      <option value='1' class='hide'>VALI_ALL_E</option>
      ";
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        $holo=CasoSeletcx($i[$i1]);
        echo "<option value='$holo'>".$i[$i1]."</option>";
        $i1++;
      }
      echo "</select>
            </div>";
      echo "<div class='col-md-5'>
      <input type='text' name='ll'class='form-control ValidationPdf textL' required  placeholder='Ingresar parametro'>
        </div>
        </div>
        </div>
        <div class='checkbox'>
          <label style='text-align: left;'><input type='checkbox' id='horor' onclick='OnClikParam()'> Mostrar Todos los registro</label>
        </div>
        <input type='hidden' class='ddTT' value='0'>";
      echo '<div class="form-group">
              <fieldset class="col-md-12">
              <legend>Modulos a mostrar en el reporte</legend>';
              $i1=0;
              foreach ($titutable as $o) {
                $i[$i1]=$o->nomtable;
                $holo=CasoSeletcx($i[$i1]);
              echo '
              <div class="checkbox">
              <label>
              <input type="checkbox" name="'.$holo.'" id="c_'.$holo.'" onclick="SumOption(\'c_'.$holo.'\')" value="'.$holo.'">
              '.$i[$i1].'
              </label>
              </div>

	           ';

               $i1++;
             }
            echo '
            </div>
            </fieldset>';
      $i1=0;

      ?>
      @endif

      <br>
      <section class="form-group">
        <section class="col-md-2 col-md-offset-4">
          <button class="btn btn-blanco-modal BotonOcul">
            Registrar
          </button>
        </section>
      </section>
    @endif
</form>
</section>


@endsection
