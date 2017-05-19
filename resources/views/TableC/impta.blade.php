<?php
function CasoSelet($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
} ?>

<section class="table-responsive">
  <table id="my-table" class="table table-striped table-hover">
    @if(isset($titutable))
    <thead>
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
        echo "</tr>";
      }
      ?>
      @endif
    </tbody>
    @endif
  </table>
</section>
