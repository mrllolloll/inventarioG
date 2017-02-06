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
  private function CasoSelet($value)
  {
    switch ($value) {
      case 'Fecth':

        return "TIMESTAMP";

      break;
      case 'text':

        return "varchar(50)";

      break;
      case 'number':

        return "int";

      break;
      case 'Dualt':

        return "";

      break;
    }
  }

  public function store(Request $request)
  {
    //
    $this->validate($request,[
      'nommodul'=>'required',
      'objet'=>'required',
    ]);
    $descrip=$this->CasoSelet($request->objet);
    $mofi1=$request->nommodul;
    $indicador = array(0=>"/ /");
    $sustitu = array(0=>"_");
    $mofi=preg_replace($indicador,$sustitu,$mofi1);

    if ($request->Fechaauto=="true") {
      $modifi=" DEFAULT CURRENT_TIMESTAMP";
    }else {
      $modifi="";
    }
    $titulo= $mofi." ".$descrip.$modifi;
    $results=DB::statement('Alter table table_centrals add '.$titulo);

    $nomert=new camptable;
    $nomert->nomtable=$request->nommodul;
    $nomert->save();

    return view('/home');

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
  public function destroy($id)
  {
    //
  }
}
