<?php

namespace App\Http\Controllers;
use App\TableCentral;
use App\camptable;
use App\Restriction;
use Illuminate\Http\Request;
class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function index()
  {
    $table=TableCentral::all();
    $titutable=camptable::all();
    $TableRestriction=Restriction::all();
    return view('home')->with(['titutable' => $titutable,'tableRes'=>$TableRestriction])->with(["table"=>$table]);
  }
}
