<?php
function CasoSelet11($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}
?>
<div class="contenedor-lateral">
<div class="panel-group" id="grupo-lateral">
  <div class="panel panel-default" id="panel-lateral">
    <div class="panel-heading" id="modalC">
      <center>

<script type="text/javascript">
  function infot(value,value1){
    $('#tool').val(value);
  }
</script>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" id="modal">

      <h4 class="panel-title">
         <button type="button" class="btn btn-blanco btn-sm btn-agregarC"  id="agregarC" data-toggle="modal" data-target="#AgreCamp1">
         
          Agregar Campos
          
        </button>
      </h4>
      </center>
    </div>
 

<style media="screen">
  .holl{
    font-size: 13px;
  }
  .usse{
    background-color: rgb(246, 186, 164);
  }
</style>

<div  class="panel-group" id="" role="tablist">
  <div class="panel panel-default" id="panel">
    <div class="panel-heading" role="tab" id="menu-lateral" style="">
      <h5 class="tituloCampos-lateral pull">Titulos de Campos</h5>

  
  
 

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
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#colas'.$i1.'" id="modal" class="nombre-tablas">
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
                  <input type="submit" class="btn btn-eliminar btn-xs" id="letra-blanca" value="Eliminar">
             </form>
            </tr>

            </table>
         

            </table>';
          }
            echo '
          </div>

        </div>
      </div>
      </div>
  </div>
   
      ';

    $i1++;
  }
  echo '<hr id="divisor-lateral">';
  $i1=0;
  ?>
  </div>
</div>

  </div>
    </div>
    </div>
    </div>

@include('formularios.agredual')

@include('formularios.agrecamptable')
@include('formularios.agragrdat')
