<?php
function CasoSelet11($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}
?>
<script type="text/javascript">
  function ondelet1(value,value1){
    $("#FormDelete1").attr('action',value);
    $('.booll').val(value1);
  }
  function infot(value,value1){
    $('#tool').val(value);
  }
</script>
    <div class="panel-heading" id="modalC">
      <h4 class="panel-title">
       <br>
       <center>
         <button type="button" class="btn btn-blanco btn-sm btn-agregarC Roboto"  id="agregarC" data-toggle="modal" data-target="#AgreCamp1">
         Agregar Campos
        </button>
        </center>
      </h4>
<style media="screen">
  .holl{
    font-size: 13px;
  }
  .usse{
    background-color: rgb(246, 186, 164);
  }
  .ui-accordion .ui-accordion-header-active
{
background: #b71c1c;
}
.ui-accordion .ui-accordion-header:hover
{
background: rgb(172, 30, 30);
font-style: italic;
}

.ui-accordion .ui-accordion-header
{
background: rgb(152, 27, 27);
color: #FFFFFF;
font-size: 18px;
}
</style>
<div  class="panel-group" id="" role="tablist">
</div>

</div>

 <div class="panel-heading" role="tab" id="menu-lateral">
      <h5 class="tituloCampos-lateral"><center>Titulos de Modulos</center></h5>

  </div>
  <div id="accordion">
  <?php
  $i1=0;
  foreach ($titutable as $o) {
    $i[$i1]=$o->nomtable;
    $mostar=CasoSelet11($i[$i1]);
    $kk=route('tablerecurses.destroy',["id"=>$o->id,"yolo"=>$mostar]);

    echo '
        <h3>'.$i[$i1].'</h3>
        <div>
        <ul>';
        if ($o->nombclum=='Dual') {
          $data1 = DB::table('tab_'.$mostar)->get();
        foreach ($data1 as $h) {
          echo "<li>";
            echo $h->info;
          echo "</li>";
          }
        echo'
              <div class="btn-group">
                <a href="#" type="button" class="btn btn-blanco btn-xs nombre-tablas" data-toggle="modal" id="modalLateral1" data-target="#agredual" onclick="infot(\''.'tab_'.$mostar.'\')"> Agregar </a>
                 <a href="#" type="button" class="btn btn-eliminar btn-xs" id="modalLateralE" btn-xs nombre-tablas" data-toggle="modal" data-target="#borr12" onclick="ondelet1(\' '.$kk.' \',\'true\')"> Eliminar </a>
              </div>
        ';
      }else {
        echo '
            <a href="#" type="button" class="btn btn-eliminar btn-xs" id="modalLateralE" btn-xs nombre-tablas" data-toggle="modal" data-target="#borr12" onclick="ondelet1(\' '.$kk.' \',\'false\')"> Eliminar </a>
        ';
      }
        echo'
        </ul>
        </div>
      ';
    $i1++;
  }
  $i1=0;
?>
  </div>
