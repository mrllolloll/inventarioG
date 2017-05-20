<<<<<<< HEAD
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
  function infot(value,value1){
    $('#tool').val(value);
  }
</script>
=======
>>>>>>> parent of 912fca3... vistas y Varios controladores
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" id="modal">
      <h4 class="panel-title">
         <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#AgreCamp1"  style="" id="btnAgrCamp">
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
<div  class="panel-group" id="accordion" role="tablist">
  <div class="panel panel-default" id="panel">
    <div class="panel-heading" role="tab" id="heading1" style="background-color: #c40909;color:white;">
      <h4 class="panel-title">
          <a href="#collapse1" data-toggle="collapse" class="panel-title holl" >
          Titulos de Campos
          <span class="caret"></span>
          </a>
      </h4>
    </div>
    </div>
<<<<<<< HEAD
 

  <?php
  $i1=0;
  foreach ($titutable as $o) {
    $i[$i1]=$o->nomtable;
    $mostar=CasoSelet11($i[$i1]);
    $kk=route('tablerecurses.destroy',["id"=>$o->id,"yolo"=>$mostar]);
    echo '  <div class="panel panel-default">
      <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" id="accordion">
        <div class="panel-heading" id="panel"">
          <h4 class="panel-title" >
            <a data-toggle="collapse" data-parent="#accordion" href="#colas'.$i1.'" id="modal">
              '.$i[$i1].'
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
              <form action="'.$kk.'" method="POST">
                  '.csrf_field().'
                  <div class="btn-group">
                    <a href="#" type="button" class="btn btn-primary btn-xs " data-toggle="modal" data-target="#agredual" onclick="infot(\''.'tab_'.$mostar.'\')"> Agregar </a>
                    <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
                  </div>
                  <input type="hidden" name="_method" value="DELETE">
              </form>
            </tr>
            </table>';
          }else {
            echo '
            <table>
            <tr>
                  <form action="'.$kk.'" method="POST">
                  '.csrf_field().'
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-danger btn-xs" value="Eliminar">
             </form>
            </tr>
            </table>';
          }
            echo '
          </div>
        </div>
      </div>
=======
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Modules</a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table">
          <tr>
            <td>
              Orders <span class="label label-success">$ 320</span>
            </td>
          </tr>
          <tr>
            <td>
              Invoices
            </td>
          </tr>
          <tr>
            <td>
              Shipments
            </td>
          </tr>
          <tr>
            <td>
              Tex
            </td>
          </tr>
        </table>
>>>>>>> parent of 912fca3... vistas y Varios controladores
      </div>
  </div>
      ';

    $i1++;
  }
  $i1=0;
  ?>
 
</div>
<<<<<<< HEAD
@include('formularios.agredual')
=======
>>>>>>> parent of 912fca3... vistas y Varios controladores
@include('formularios.agrecamptable')
