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



<div class="contenedor-lateral">
<div class="panel-group" id="grupo-lateral">
  <div class="panel panel-default" id="panel-lateral">
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
</style>
<div  class="panel-group" id="" role="tablist">


     </div>

</div>

 <div class="panel-heading" role="tab" id="menu-lateral">
      <h5 class="tituloCampos-lateral"><center>Titulos de Campos</center></h5>

  </div>

  <?php
  $i1=0;
  foreach ($titutable as $o) {
    $i[$i1]=$o->nomtable;
    $mostar=CasoSelet11($i[$i1]);
    $kk=route('tablerecurses.destroy',["id"=>$o->id,"yolo"=>$mostar]);

    echo '
    <hr id="divisor-lateral">

      <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body panel-lateral" id="accordion">
        <div class="panel-heading" id="panel">
          <h4 class="panel-title" >
            <a data-toggle="collapse" data-parent="#accordion" href="#colas'.$i1.'" id="modalLateral" class="nombre-tablas">

              '.$i[$i1].'
               <span class="caret pull-right" style="margin-top: 5px"></span>
            </a>
          </h4>
        </div>
         <div id="colas'.$i1.'" class="panel-collapse collapse">
          <div class="panel-body">
            ';
            if ($o->nombclum=='Dual') {
              $data1 = DB::table('tab_'.$mostar)->get();
            echo '
            <table>
            ';
            foreach ($data1 as $h) {
                echo $h->info;
                echo "<br>";
              }
            echo'
            <br>
            <tr>
                  <div class="btn-group">
                    <a href="#" type="button" class="btn btn-blanco btn-xs nombre-tablas" data-toggle="modal" id="modalLateral1" data-target="#agredual" onclick="infot(\''.'tab_'.$mostar.'\')"> Agregar </a>
                     <a href="#" type="button" class="btn btn-eliminar btn-xs" id="modalLateralE" btn-xs nombre-tablas" data-toggle="modal" data-target="#borr12" onclick="ondelet1(\' '.$kk.' \',\'true\')"> Eliminar </a>
                  </div>
            </tr>
            </table>';
          }else {
            echo '
            <table>
            <tr>
              <a href="#" type="button" class="btn btn-eliminar btn-xs" id="modalLateralE" btn-xs nombre-tablas" data-toggle="modal" data-target="#borr12" onclick="ondelet1(\' '.$kk.' \',\'false\')"> Eliminar </a>
            </tr>
            </table>';
          }
            echo '
          </div>
        </div>
      </div>
  </div>
      ';

    $i1++;
    echo '<hr id="divisor-lateral">';
  }
  $i1=0;
?>
 </div>
 <br><br>
 </div>
    </div>
@include('formularios.agredual')
@include('formularios.agrecamptable')
@include('formularios.agragrdat')
@include('Mensajes.DeleteMoldal')
@include('Mensajes.Deletemodallateral')
