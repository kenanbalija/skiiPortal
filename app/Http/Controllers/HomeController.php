<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novost;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novosti = Novost::orderBy('created_at', 'desc')->paginate(3);
        return view('home', compact('novosti'));
    }

    public function indexMK(){

    }
}
