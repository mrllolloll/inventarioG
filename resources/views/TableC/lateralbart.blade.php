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
    <div class="panel-heading" style="background-color: #c40909; color:white; font-size: 15px">
      <h4 class="panel-title">
         <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AgreCamp1"  style="color: white; background-color: #990707; border-color: #990707">
          Agregar Campos

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
<div class="panel-group" id="accordion" role="tablist">
  <div class="panel panel-default" style="background-color: #c40909; color:white;">
    <div class="panel-heading" role="tab" id="heading1" style="background-color: #c40909;color:white;">
      <h4 class="panel-title">
          <a href="#seccion" class="panel-title holl" >
          Titulos de Campos
          <span class="caret"></span>
          </a>
      </h4>
    </div>
  </div>

  <?php
  $i1=0;
  foreach ($titutable as $o) {
    $i[$i1]=$o->nomtable;
    $mostar=CasoSelet11($i[$i1]);
    $kk=route('tablerecurses.destroy',["id"=>$o->id,"yolo"=>$mostar]);
    echo '  <div class="panel panel-default">
      <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" id="accordion">
        <div class="panel-heading" style="background-color: #c40909; color:white;">
          <h4 class="panel-title" >
            <a data-toggle="collapse" data-parent="#accordion" href="#colas'.$i1.'" style="color:white ; font-size: 15px">
              '.$i[$i1].'
            </a>
          </h4>
        </div>
        <div id="colas'.$i1.'" class="panel-collapse collapse">
          <div class="panel-body">
            <table>
            <tr>
                  <form action="'.$kk.'" method="POST">
                  '.csrf_field().'
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
             </form>
            </tr>
            </table>
          </div>
        </div>
      </div>
      </div>
  </div>
      ';

    $i1++;
  }
  $i1=0;
  ?>

</div>

@include('formularios.agrecamptable')
@include('formularios.agragrdat')
