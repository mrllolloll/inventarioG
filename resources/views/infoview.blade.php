<?php
function CasoSeletss($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}
?>
@foreach($CamposTable as $n)
<?php foreach ($TituloTable as $Titu){
   $ArregloNomb=CasoSeletss($Titu->nomtable);
   if ($Titu->nombclum=="Dual") {
     if ($busc = DB::table('tab_'.$ArregloNomb)->where('id', $n->$ArregloNomb)->first()) {
          echo '<section class="col-md-12">
                  <section class="col-md-4" style=" margin-left:-2%; background-color:rgb(241, 241, 241); text-align: left;">'.$Titu->nomtable.':</section>
                  <section class="col-md-8">'.$busc->info.'</section>
                </section>';
      }else {
        echo "<td>N/A</td>";
      }
   }elseif ($Titu->nombclum=="file") {
     if ($n->$ArregloNomb) {
     echo '
        <section class="col-md-12">
        <section class="col-md-4" style=" background-color:rgb(241, 241, 241); margin-left:-2%; text-align: left;">'.$Titu->nomtable.':</section>
        <section class="col-md-8" style="background-color:rgb(255, 255, 255)"><img src="Imgtable/'.$n->$ArregloNomb.'" alt="previsualización de imagenes" class="imgredirc" width="300" height="300"></section>
       </section>';
     }else {
       echo '<section class="col-md-12">
       <section class="col-md-4" style=" background-color:rgb(241, 241, 241); margin-left:-2%; text-align: left;">'.$Titu->nomtable.':</section>
       <section class="col-md-8" style="background-color:rgb(255, 255, 255)">N/A</section>
      </section>';
     }
   }else{
    echo '
    <section class="col-md-12">
      <section class="col-md-4" style=" margin-left:-2%; background-color:rgb(241, 241, 241); text-align: left;">'.$Titu->nomtable.':</section>
      <section class="col-md-8">'.$n->$ArregloNomb.'</section>
    </section>
    ';
    }
}
?>
@endforeach
