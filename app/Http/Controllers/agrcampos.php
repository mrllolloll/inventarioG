<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableCentral;
use Illuminate\Support\Facades\DB;
use App\camptable;

class agrcampos extends Controller
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

    private function CasoAelet1($value)
     {
       $mofi1=$value;
       $sustitu = array(0=>"_");
       $indicador = array(0=>"/ /");
       return preg_replace($indicador,$sustitu,$mofi1);
     }

    public function store(Request $request)
    {
      $yolito="";
      $fatamano="";
      $titutable=camptable::all();
      $i1=0;
      foreach ($titutable as $o) {
        $i[$i1]=$o->nomtable;
        if ($o->nombclum!="false") {
          $fatamano.=",".$this->CasoAelet1($i[$i1]);
          $yolito.=",'".$request->$i1."'";
        }
        $i1++;
      }
      $insertado = DB::insert('insert into table_centrals (user_id'.$fatamano.') values (1'.$yolito.')');
      $i1=0;
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
    public function destroy($id)
    {
        //
    }
}
