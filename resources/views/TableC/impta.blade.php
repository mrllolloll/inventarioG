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
        @foreach($titutable as $n)
        <?php if ($n->nomtable == array_get($char,$n->nomtable)) { ?>
        <th>{{$n->nomtable}}</th>
          <?php } ?>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @if(isset($table))

      <?php
      $i1=0;
      foreach ($titutable as $o) {
        if ($o->nomtable == array_get($char,$o->nomtable)) {
        $i[$i1]=$o->nomtable;
        $i0[$i1]=$o->nombclum;
        $i1++;
        }
      }
      $i1=0;
      foreach ($table as $lol) {
        echo "<tr>";
        while ($i1 < count($i)) {
          $mostar=CasoSelet($i[$i1]);
          if ($i0[$i1]=="Dual") {
            if ($busc = DB::table('tab_'.$mostar)->where('id',$lol->$mostar )->first()) {
                 echo "<td>".$busc->info."</td>";
             }else {
               echo "<td>N/A</td>";
             }
          }else {
          echo "<td>".$lol->$mostar."</td>";
        }
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
