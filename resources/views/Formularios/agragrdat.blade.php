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

$(document).ready(function(){
  @foreach($tableRes as $T)
    <?php $Campostbale=DB::table('camptables')->where('id', $T->camptables_id)->first() ?>
    $('#id{{CasoSelet101($Campostbale->nomtable)}}').click(function(){
      if($(this).val()=={{$T->objetive_id}}){
    <?php $Opj=DB::table('camptables')->where('id', $T->afected_camptables_id)->first()?>
      $('#id{{CasoSelet101($Opj->nomtable)}}').val(@if($T->default_option!="" && $Opj->nombclum =="Dual") {{$T->default_option}} @elseif($T->default_option=="" && $Opj->nombclum =="text") "n/a" @elseif($T->default_option=="" && $Opj->nombclum =="number") 0 @elseif($T->default_option=="" && $Opj->nombclum =="Dual") "n/a" @elseif($T->default_option=="" && $Opj->nombclum =="DATE") "1111-11-11"  @else "" @endif);
      $('#id{{CasoSelet101($Opj->nomtable)}}').hide(100);
      $('.Shock{{CasoSelet101($Opj->nomtable)}}').hide(100);
    }else {
      $('#id{{CasoSelet101($Opj->nomtable)}}').val("");
      $('#id{{CasoSelet101($Opj->nomtable)}}').show(100);
      $('.Shock{{CasoSelet101($Opj->nomtable)}}').show(100);
    }
  });
  @endforeach
});

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
            <section class=" Shock'.$fatamano.' form-group"><label for="id'.$fatamano.'" class=" Shock'.$fatamano.' col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8">
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
              echo '<section class=" Shock'.$fatamano.' form-group"><label for="id'.$fatamano.'" class=" Shock'.$fatamano.' col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8">';
              echo '<select id="id'.$fatamano.'" name="'.$i1.'" class="form-control" required>';
              echo '<option value="">Seleccionar una opcion</option>';
              echo '<option value="n/a" class="hide">N/A</option>';
              foreach ($data as $datas) {
                echo '<option value="'.$datas->id.'">'.$datas->info.'</option>';
              }
              echo '</select>';
              echo '</section>
                    </section>';
          }elseif($dates=="file") {
            echo '<section class=" Shock'.$fatamano.' col-md-12"><label for="id'.$fatamano.'" class=" Shock'.$fatamano.' col-md-4 valfile">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" accept="image/*" onchange="control(this)"></section></section>';
            echo "<br><br>";
          }elseif($dates=="number") {
            echo '<section class=" Shock'.$fatamano.' form-group"><label for="id'.$fatamano.'" class=" Shock'.$fatamano.' col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" class="form-control numL" required min="0"  max="99999999999999999999"></section></section>';
          }else{
            echo '<section class=" Shock'.$fatamano.' form-group"><label for="id'.$fatamano.'" class=" Shock'.$fatamano.' col-md-4">Ingresar '.$fatamanor.' :</label><section Class="col-md-8"><input id="id'.$fatamano.'" type="'.$dates.'" name="'.$i1.'" class="form-control textL" maxlength="50" required></section></section>';
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
