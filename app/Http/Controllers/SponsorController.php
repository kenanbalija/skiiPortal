<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
  //index page for /sponzori route
  public function index()
  {
      return view('sponzori.sponzori');
  }
}
