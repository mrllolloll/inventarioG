<?php
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
function CasoSelet100($value)
{
  $mofi1=$value;
  $sustitu = array(0=>" ");
  $indicador = array(0=>"/_/");
  return preg_replace($indicador,$sustitu,$mofi1);
}
function CasoSelet101($value)
{
  $mofi1=$value;
  $sustitu = array(0=>"_");
  $indicador = array(0=>"/ /");
  return preg_replace($indicador,$sustitu,$mofi1);
}

Route::get('/pdf', function () {
  $titutable=App\camptable::all();
  $bor=CasoSelet100($_GET['ss']);
  $i=0;
  $char= array();
  foreach ($titutable as $dual ) {
      $borr=CasoSelet101($dual->nomtable);
      if (isset($_GET[$borr])) {
        $char=array_add($char,$dual->nomtable,$dual->nomtable);
        $i++;
      }
      if ($dual->nombclum=="Dual" && $dual->nomtable == $bor ) {
        $table=App\TableCentral::join('tab_'.$_GET['ss'],'table_centrals.'.$_GET['ss'],'=','tab_'.$_GET['ss'].'.id')->where('tab_'.$_GET['ss'].'.info','=',$_GET['ll'])->get();
      }elseif($dual->nombclum !="Dual" && $dual->nomtable == $bor){
        $table=App\TableCentral::where($_GET['ss'],'=',$_GET['ll'])->get();
      }
  }
  $pdf = PDF::loadView('pdfimp',['table'=>$table,'titutable'=>$titutable,'char'=>$char]);
  $pdf->setPaper('A4', 'landscape');
  return $pdf->download('pruebapdf.pdf');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home1', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('/tablerecurses','tablerecurses');
Route::resource('/camp','agrcampos');
Route::resource('/agre','AgrecamDinamic');
