<?php
function CasoSelet($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
} ?>
<script>
$(document).ready(function(){$('.fff').removeClass("hide");$('.fff').hide(0);  });
function ondelet(value,value1){
  $("#FormDelete").attr('action',value);
  $(".boolT").val(value1);
}
$(document).ready(function(){
  // Write on keyup event of keyword input element
  $("#kwd_search").keyup(function(){
    // When value of the input is not blank
    if( $(this).val() != "")
    {
      // Show only matching TR, hide rest of them
      $("#my-table tbody>tr").hide();
      $("#my-table td:contains-ci('" + $(this).val() + "')").parent("tr").show();
    }
    else
    {
      // When there is no input or clean again, show everything back
      $("#my-table tbody>tr").show();
    }
  });
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"],
{
  "contains-ci": function(elem, i, match, array)
  {
    return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
  }
});

function ImagenesView(value){
  $('.imgredirc').attr("src",value);
  $('.imgredirc').attr("href",value);
}

function OcultBoto(value,value1){
  if (value == "true") {
    $('.fff').hide(300);
    $('.LL').show(300);
    $('.hidetaion'+value1).hide(300);
    $('.botonds'+value1).show(300);
  }else{
    $('.hidetaion'+value1).show(300);
    $('.botonds'+value1).hide(300);
  }
}

$(document).ready(function(){
       $(".DetallesClass").click(function(){

           var valores="";
           var into=0;
           // Obtenemos todos los valores contenidos en los <td> de la fila
           // seleccionada
           $(this).parents("tr").find("td").each(function(){
               valores+=$(this).html()+"\n";
           });

           alert(valores);
       });
});

</script>
<section class="table-responsive col-xs-5 col-sm-12 col-md-12">
  <table id="my-table" class="table table-striped table-hover">
    @if(isset($titutable))
    <thead>
      <tr>
        <th>
          <label for="kwd_search">Buscar: </label><input type="text" id="kwd_search" value=""/>
        </th>
      </tr>
      <tr>
        <!--Cambiar de lugar las opciones para el primerpuesto y agregarles detalles validar el resto con jquery y validate en laravel en su respectivo modelos en especial las imagenes con jquery-->
        @foreach($titutable as $n)
        <th>{{$n->nomtable}}</th>
        @endforeach
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($table))
      <?php
      $i1=0;
      $i2=0;
      $i3=array();
      $i0=array();
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        if ($o->nombclum=="Dual") {
          $i0[$i2]=true;
          $i3[$i2]=false;
        }elseif ($o->nombclum=="file") {
          $i0[$i2]=false;
          $i3[$i2]=true;
        }else{
          $i0[$i2]=false;
          $i3[$i2]=false;
        }
        $i2++;
        $i1++;
      }

      $i1=0;
      $i2=0;
      $visualimg="";
      foreach ($table as $lol) {
        echo "<tr>";
        while ($i1 < count($i)) {
          $mostar=CasoSelet($i[$i1]);
          if ($i0[$i2]!="Date") {
            if ($i3[$i2]!=true) {
              echo "<td>".$lol->$mostar."</td>";
            }else {
              if ($lol->$mostar!="") {
                echo '<th>
                        <button type="button" class="btn btn-primary btn-xs" style="color:white;" data-toggle="modal" data-target="#ImgBoton" onclick="ImagenesView(\'Imgtable/'.$lol->$mostar.'\')">
                            Visualizar
                        </button>
                      </th>';
              }else {
                echo "<td>N/A</td>";
              }


                    if ($visualimg!="") {
                      $visualimg.=",".$lol->$mostar;
                    }else {
                      $visualimg.=$lol->$mostar;
                    }

            }
          }else {
           if ($busc = DB::table('tab_'.$mostar)->where('id', $lol->$mostar)->first()) {
                echo "<td>".$busc->info."</td>";
            }else {
              echo "<td>N/A</td>";
            }
          }
          $i2++;
          $i1++;
        }
        $i1=0;
        $i2=0;
        $kk=route('camp.destroy',$lol->id);
       echo"
       <th>
       <center>
        <a type='button' class='btn btn-blanco btn-xs LL hidetaion".$lol->id." ' onclick='OcultBoto(\"true\",".$lol->id.")'>Ver Opciones</a>
        <div class='btn-group-vertical fff botonds".$lol->id." hide'>
          <a href='/camp/".$lol->id."/edit' class='btn btn-blanco btn-xs bordebuttonfixed'>Editar</a>
          <a type='button' class='btn btn-blanco btn-xs bordebuttonfixedinter DetallesClass hide'>Detalles</a>
          <a type='button' class='btn btn-danger btn-xs bordebuttonfixedinter' style='color:white;' data-toggle='modal' data-target='#borr11' onclick='ondelet(\"".$kk."\",\"".$visualimg."\")'>Borrar</a>
          <a type='button' class='btn btn-primary btn-xs bordebuttonfixeddin' style='color:white' onclick='OcultBoto(\"false\",".$lol->id.")'>Cancelar</a>
        </div>
        </center>
       </th>";
        echo "</tr>";
      }
      ?>
      @endif
    </tbody>
    @endif

  </table>
</section>
