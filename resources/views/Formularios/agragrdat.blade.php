<?php use Illuminate\Support\Facades\DB; ?>
@extends('TableC.modalagracamp1', ['imodal'=>"agreinfo"])
@section('titlmodal','Desea agregar informacion?')
@section('contentmodl')

<script type="text/javascript">
function control(f){
    var ext=['gif','jpg','jpeg','png'];
    var v=f.value.split('.').pop().toLowerCase();
    for(var i=0,n;n=ext[i];i++){
        if(n.toLowerCase()==v)
            return
    }
    var t=f.cloneNode(true);
    t.value='';
    f.parentNode.replaceChild(t,f);
}
</script>

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

<form id="my-form" method="POST" class="form-horizontal" role="form" method="post" action="{{url('camp')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
@if(isset($titutable))
    <?php
    $i1=0;
    $i000=0;
    foreach ($titutable as $o) {
      $i000++;
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
          }elseif($dates=="file") {
            echo '<section class="col-md-12"><label for="id'.$fatamano.'" class="col-md-4 valfile">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" required accept="image/*" onchange="control(this)"></section></section>';
            echo "<br><br>";
          }elseif($dates=="number") {
            echo '<section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" class="form-control numL" required min="0"  max="99999999999999999999"></section></section>';
          }else{
            echo '<section class="form-group"><label for="id'.$fatamano.'" class="col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" class="form-control textL" maxlength="50" required></section></section>';
          }
      }
      $i1++;
    }
    $i1=0;
    ?>
    <section class="form-group">
    <section Class="col-md-8">
    </section>
  </section>
  @if($i000!=0)
  <section class="form-group">
    <section class="col-md-2 col-md-offset-4">
      <button class="btn btn-blanco-modal">
        Registrar
      </button>
    </section>
  </section>
  @endif
  @endif
</form>
@endsection
