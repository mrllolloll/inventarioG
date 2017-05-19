<?php

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
Route::get('/pdf', function () {
  $table=App\TableCentral::where($_GET['ss'],'=',$_GET['ll'])->get();
  $titutable=App\camptable::all();
  $pdf = PDF::loadView('pdfimp',['table'=>$table,'titutable'=>$titutable]);
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
