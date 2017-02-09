<?php
function CasoSelet($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
} ?>
<script>
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
</script>

<section class="table-responsive">
  <table id="my-table" class="table table-striped table-hover">
    @if(isset($titutable))
    <thead>
      <tr>
        <th>
          <label for="kwd_search">Buscar: </label><input type="text" id="kwd_search" value=""/>
        </th>
      </tr>
      <tr>
        <th>Identificador</th>
        @foreach($titutable as $n)
        <th>{{$n->nomtable}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @if(isset($table))

      <?php
      $i1=0;
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        $i1++;
      }
      $i1=0;
      foreach ($table as $lol) {
        echo "<tr>";
        echo "<td>".$lol->id."</td>";
        while ($i1 < count($i)) {
          $mostar=CasoSelet($i[$i1]);
          echo "<td>".$lol->$mostar."</td>";
          $i1++;
        }
        $i1=0;
        $kk=route('camp.destroy',$lol->id);
       echo"<td>
        <td>
       <a href='/camp/".$lol->id."/edit' class='btn btn-primary btn-xs'>Editar</a>
            </td>
             <td>
             <form  action='".$kk."' method='POST'>
             ".csrf_field()."
             <input type='hidden' name='_method' value='DELETE'>
             <input type='submit' class='btn btn-danger btn-xs' value='Borrar'>
        </form>
       </td>
       </td>
              ";
        echo "</tr>";
      }
      ?>
      @endif
    </tbody>
    @endif
  </table>
</section>
