<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Image;
use App\Sponzor;
use App\Http\Requests\StoreSponzorPost;

class SponsorController extends Controller
{
  //index page for /sponzori route
  public function index()
  {
      $sponzori = Sponzor::all();
      return view('sponzori.sponzori', compact('sponzori'));
  }
  public function add(){
    return view('sponzori.add');
  }
  public function save(StoreSponzorPost $store){
    $sponzor_data = $store->all();
    $destination = public_path().'/img/sponzori/';

    $sponzor_img = Request::file('img');
    $ext = $sponzor_img->getClientOriginalName();
    $fileName = time().rand(11111,99999).'.'.$ext;

    Image::make($sponzor_img->getRealPath())->save($destination.$fileName);
    $sponzor_data['img'] = $fileName;

    Sponzor::create($sponzor_data);
    \Session::flash('flash_message', 'Uspjesno ste dodali novog sponzora');
    return redirect('/sponzori');
  }
  public function delete($id){
    $sponzor = Sponzor::find($id);
    $sponzor->delete();
    \Session::flash('flash_message', 'Izbrisali ste sponzora!');
    return redirect('/sponzori');
  }
}
