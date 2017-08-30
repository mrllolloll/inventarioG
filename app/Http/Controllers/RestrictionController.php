<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Restriction;
use App\camptable;
class RestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    public function InsertC(Request $request)
    {

      Restriction::insert(['camptables_id' => $request->ModulNombEncont, 'objetive_id' => $request->ObpObjetive,'afected_camptables_id' =>$request->ModulAfect,'default_option' => $request->OptDefault]);
      $retn="sd";
      return redirect("home?msodal=$retn");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$name,$boole)
    {
      $Find=camptable::find($id);
      if ($boole=="false" && $Find->nombclum =="Dual") {
        $Ypr=DB::table('tab_'.CasoSelet101($Find->nomtable))->get();
        $OptionTap="";
        foreach ($Ypr as $OpTe){
          $OptionTap.='<option value="'.$OpTe->id.'">'.$OpTe->info.'</option>';
        }
        echo '<select name="'.$name.'" class="form-control col-xs-12">'.$OptionTap.'</select>';
      }else {
        echo 'Opcion vacia <input type="hidden" name="'.$name.'" value="">';
      }
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
          $Encami= base64_decode($id);
          Restriction::destroy($Encami);
          return redirect('/home');
    }
}
