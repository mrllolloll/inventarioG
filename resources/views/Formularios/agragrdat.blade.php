<?php use Illuminate\Support\Facades\DB; ?>
@extends('TableC.modalagracamp1', ['imodal'=>"agreinfo"])
@section('titlmodal','Desea agregar informacion?')
@section('contentmodl')

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
@if(isset($titutable))
    <?php
    $i1=0;
    foreach ($titutable as $o) {
      $i[$i1]=$o->nomtable;
      $fatamano=CasoSelet1($i[$i1]);
      $fatamanor=CasoSeletr($i[$i1]);
      $dates=$o->nombclum;
      if ($dates!="false") {
          if ($dates=="DATE") {
            echo '
            <section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8">
            <input required type="text" id="id'.$fatamano.'"   name="'.$i1.'" class="form-control">
            </section></section>
            <script type="text/javascript">
            $(document).ready(function() {
            $("#id'.$fatamano.'").datepicker({dateFormat:"yy-mm-dd"});
            });
            </script>
            ';
          }elseif($dates=="Dual"){
              $dualar="tab_";
              $dualar.=$fatamano;
              $data = DB::table($dualar)->get();
              echo '<section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8">';
              echo '<select id="id'.$fatamano.'" name="'.$i1.'" class="form-control" required>';
              echo '<option value="">Seleccionar una opcion</option>';
              foreach ($data as $datas) {
                echo '<option value="'.$datas->id.'">'.$datas->info.'</option>';
              }
              echo '</select>';
              echo '</section>
                    </section>';
          }else {
            echo '<section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" class="form-control" required></section></section>';
          }
      }
      $i1++;
    }
    $i1=0;
    ?>
  @endif
    <section class="form-group">
    <section Class="col-md-8">
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
@endsection
