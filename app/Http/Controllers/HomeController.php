<?php

namespace App\Http\Controllers;

use Request;
use App\Novost;
use App\About;

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
        $texts = About::all();
        return view('home', compact('novosti', 'texts'));
    }

    public function about_change(){
        $texts = About::all();
        return view('aboutChange' , compact('texts'));
    }
    public function about_save($id){
        $input = Request::all();
        About::find($id)->update([
          'naslov1' => $input['naslov1'],
          'naslov2' => $input['naslov2'],
          'naslov3' => $input['naslov3'],
          'naslov4' => $input['naslov4'],
          'naslov1_body' => $input['naslov1_body'],
          'naslov2_body' => $input['naslov2_body'],
          'naslov3_body' => $input['naslov3_body'],
          'naslov4_body' => $input['naslov4_body']
         ]);
        \Session::flash('flash_message', 'Uspjesno ste izmjenili podatke');
        return redirect('/home');

    }

    public function indexMK(){

    }
}
