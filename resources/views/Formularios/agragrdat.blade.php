@extends('TableC.modalagracamp', ['idmodal'=>"agreinfo"])
@section('titlemodal','Desea agregar informacion?')
@section('contentmodal')
<?php
function CasoSelet1($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}
function CasoSeletr($value)
{
  $mofi1=$value;
  $indicador = array(0=>"/_/");
  $sustitu = array(0=>" ");
  return preg_replace($indicador,$sustitu,$mofi1);
} ?>

<form  method="POST" class="form-horizontal" role="form" method="post" action="{{url('camp')}}">
  {{ csrf_field() }}
    <?php
    $i1=0;
    foreach ($titutable as $o) {
      $i[$i1]=$o->nomtable;
      $fatamano=CasoSelet1($i[$i1]);
      $fatamanor=CasoSeletr($i[$i1]);
      echo '<section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="text" name="'.$i1.'" class="form-control"></section></section>';
      $i1++;
    }
    $i1=0;
    ?>
    <section class="form-group">
    <section Class="col-md-8">
    </section>
  </section>
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-primary">
        Registrar
      </button>
    </section>
  </section>
</form>
@endsection
