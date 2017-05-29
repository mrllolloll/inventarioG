<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableCentral;
use Illuminate\Support\Facades\DB;
use App\camptable;

class tablerecurses extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  private function CasoSelet($value,$value1)
  {
    switch ($value) {
      case 'Fecth':

          if ($value1 =="true") {
            return "TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
          }else {
            return "DATE";
          }

      break;
      case 'text':

        return "varchar(50)";

      break;
      case 'number':

        return "int";

      break;

      case 'Dual':
        return "Dual";
      break;
    }
  }

  private function yolo($value,$value1)
  {
    switch ($value) {
      case 'Fecth':

          if ($value1 =="true") {
            return "false";
          }else {
            return "DATE";
          }

      break;
      case 'text':

        return "text";

      break;
      case 'number':

        return "number";

      break;
    }
  }


  public function store(Request $request)
  {
    //
    $this->validate($request,[
      'nommodul'=>'required',
      'nommodul'=>'unique:camptables,nomtable',
      'nommodul'=>'max:18',
      'objet'=>'required',
    ]);
    $descrip=$this->CasoSelet($request->objet,$request->Fechaauto);
    $mofi1=$request->nommodul;
    $indicador = array(0=>"/ /");
    $sustitu = array(0=>"_");
    $mofi=preg_replace($indicador,$sustitu,$mofi1);
    if ($descrip!="Dual") {
        $sinta=$mofi." ".$descrip;
        $results=DB::statement('Alter table table_centrals add '.$sinta);
        $descript=$this->yolo($request->objet,$request->Fechaauto);
        $nomert=new camptable;
        $nomert->nomtable=$request->nommodul;
        $nomert->nombclum=$descript;
        $nomert->save();
    }else {
      $results=DB::statement('Alter table table_centrals add '.$mofi.' int');
      $results=DB::statement('CREATE TABLE tab_'.$mofi.' (id int NOT NULL AUTO_INCREMENT,info varchar(255) NOT NULL,PRIMARY KEY (id))');
      $nomert=new camptable;
      $nomert->nomtable=$request->nommodul;
      $nomert->nombclum="Dual";
      $nomert->save();
    }

    return redirect('/home');

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Request $request,$id)
  {
    camptable::destroy($id);
    $results=DB::statement('alter table table_centrals drop column '.$_GET['yolo']);
    if ($request->bool=="true") {
        $results=DB::statement('DROP TABLE tab_'.$_GET['yolo']);
    }
    return back();
  }
}
