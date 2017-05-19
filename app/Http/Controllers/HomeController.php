<?php

namespace App\Http\Controllers;
use App\TableCentral;
use App\camptable;
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
    return view('home')->with(['titutable' => $titutable])->with(["table"=>$table]);
  }
}
