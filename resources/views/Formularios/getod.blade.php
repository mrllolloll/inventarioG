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
<center>
Buscar: 
@if(isset($titutable))
    @if(isset($table))
      <?php
      $i1=0;
      echo "<select name='ss'>";
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        $holo=CasoSeletcx($i[$i1]);
        echo "<option value='$holo'>".$i[$i1]."</option>";
        $i1++;
      }
      echo "</select>";
      echo "<input type='text' name='ll'>";
      $i1=0;

      ?>
      @endif
    </center>
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
