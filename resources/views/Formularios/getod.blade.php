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

<section class="table-responsive">
<form class="form-horizontal" role="form" action="{{url('/pdf')}}" method="GET">
{{ csrf_field() }}
@if(isset($titutable))
    @if(isset($table))
      <?php
      $i1=0;
      echo "
      <div class='form-group'>
      <div class='col-md-12'>
      <div class='col-md-2'>
        Buscar:
      </div>
      <div class='col-md-4'>
      <select name='ss' class='form-control'>";
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        $holo=CasoSeletcx($i[$i1]);
        echo "<option value='$holo'>".$i[$i1]."</option>";
        $i1++;
      }
      echo "</select>
            </div>";
      echo "<div class='col-md-5'>
      <input type='text' name='ll'class='form-control' placeholder='Ingresar parametro'>
        </div>
        </div>
        </div>";

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
              <input type="checkbox" name="'.$holo.'" id="c_'.$holo.'" value="'.$holo.'">
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
          <button class="btn btn-blanco-modal">
            Registrar
          </button>
        </section>
      </section>
    @endif
</form>
</section>


@endsection
