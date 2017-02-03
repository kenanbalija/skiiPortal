<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Competition;
use Illuminate\Support\Facades\Validator;

class ResultsController extends Controller
{
  //index page for /rezultati route
  public function index()
  {
      $results = Competition::all();
      return view('rezultati.rezultati', compact('results'));
  }
  public function add(){
      return (view('rezultati.add'));
  }
  public function save(Request $request){
    $validator = Validator::make($request->all(), [
      ['name' => 'required|min:3']
    ]);
    $rezultat = new Competition;
    $rezultat->name=$request->input('name');
    $rezultat->date=$request->input('date');
    $rezultat->results=$request->input('results');
    $rezultat->save();
    \Session::flash('flash_message', 'Uspješno ste kreirali novi rezultat');
    return redirect('/rezultati');
  }
  public function delete($id){
    $rezultat = Competition::find($id);
    $rezultat ->delete();
    \Session::flash('flash_message', 'Izbrisali ste rezultat');
    return redirect('/rezultati');
  }
}
