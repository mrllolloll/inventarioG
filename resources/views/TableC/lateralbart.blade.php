<?php
function CasoSelet11($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}
?>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
         
        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AgreCamp1">
          Agregar Campos.
        </button>
      </h4>
    </div>
  </div>
</div>
<style media="screen">
  .holl{
    font-size: 13px;
  }
  .usse{
    background-color: rgb(246, 186, 164);
  }
</style>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title holl">
          Titulos de Campos
      </h4>
    </div>
  </div>
</div>
<div class="panel-group" id="accordion">
  <?php
  $i1=0;
  foreach ($titutable as $o) {
    $i[$i1]=$o->nomtable;
    $mostar=CasoSelet11($i[$i1]);
    echo '  <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#colas'.$i1.'">
              '.$mostar.'
            </a>
          </h4>
        </div>
        <div id="colas'.$i1.'" class="panel-collapse collapse">
          <div class="panel-body">
            <table>
              <tr>
                <td>Eliminar</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      ';

    $i1++;
  }
  $i1=0;
  ?>
</div>
<script>
$("").click(function(){
  alert("Hello World!");
});
</script>
@include('formularios.agrecamptable')
@include('formularios.agragrdat')
