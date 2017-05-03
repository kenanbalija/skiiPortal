<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Novost;
use Request;
use Image;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreNovostPost;

class NewsController extends Controller
{
  public function __construct()
    {
        // $this->middleware('auth');
    }
  //index page for /novosti route
  public function index()
  {
    $novosti = Novost::orderBy('created_at', 'desc')->paginate(10);
    return view('novosti.novosti', compact('novosti'));
  }
  public function write(){
    return view('novosti.write');
  }
  public function news_get($id){
    $novosti = Novost::find($id);
    return view('novosti.update', compact('novosti'));
  }
  public function update($id){
    $input = Request::all();
    $destination = public_path().'/img/news/';
    if (Request::hasFile('novost_img')){
      $novost_img = Request::file('novost_img');
      $extension = $novost_img->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      //dodati Image objekat
      Image::make($novost_img->getRealPath())->save($destination.$fileName);
      $input['novost_img'] = $fileName;
      Novost::find($id)->update($input);
      \Session::flash('flash_message', 'Uspjesno ste promjenili Vijest!');
      return redirect('/novosti');
      
    } else {
      Novost::find($id)->update($input);
      \Session::flash('flash_message', 'Uspjesno ste promjenili Vijest!');
      return redirect('/novosti');
    }

  }
  public function delete($id){
    $novost = Novost::find($id);
    $novost->delete();
    \Session::flash('flash_message', 'Izbrisali ste Vijest!');
    return redirect('/');
  }

  public function save(StoreNovostPost $store){
    $novost_data = $store->all();
    $destination = public_path().'/img/news/';
    //dodati Input klasu
    if (Request::hasFile('novost_img')){
      $novost_img = Request::file('novost_img');
      $extension = $novost_img->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      //dodati Image objekat
      Image::make($novost_img->getRealPath())->save($destination.$fileName);
      $novost_data['novost_img'] = $fileName;
      Novost::create($novost_data);
      \Session::flash('flash_message', 'Uspješno ste kreirali novu vijest!');
      return redirect('/novosti');
    } else {
      $novost_data['novost_img'] = '';
      Novost::create($novost_data);
      \Session::flash('flash_message', 'Uspješno ste kreirali novu vijest!');
      return redirect('/novosti');
    }
  }
}
