<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableCentral;
use Illuminate\Support\Facades\DB;

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

        return "DATE";

      break;
      case 'text':

        return "text";

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
    $titulo= $request->nommodul." ".$descrip;

    $results=DB::statement('Alter table table_centrals add '.$titulo);
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
