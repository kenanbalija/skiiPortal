<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
  //index page for /rezultati route
  public function index()
  {
      return view('rezultati.rezultati');
  }
}
