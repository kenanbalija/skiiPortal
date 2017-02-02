<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Album;
use Image;
class GalleryController extends Controller
{
    //index page for /galerija route
    public function index()
    {
        $albums = Album::all();
        return view('galerija.galerija', compact('albums'));
    }
    public function save(Request $request){
      $validator = Validator::make($request->all(), [
        ['album_name' => 'required|min:3']
      ]);
      $album = new Album;
      $album->name=$request->input('album_name');
      $album->published = 1;
      $album->save();
      return redirect('/galerija');
    }
    public function view($id){
      $album = Album::findOrFail($id);
      return view('galerija.view', compact('album'));
    }
    public function do_image_upload(Request $request){
      $file = $request->file('file');
      $filename = uniqid() .$file-> getClientOriginalName();
      $file-> move('img/albums/', $filename);
      $gallery = Album::find($request->input('album_id'));
      $image = $gallery->images()->create([
        'album_id' => $request->input('album_id'),
        'file_name'=> $filename,
        'file_size'=> $file->getClientsize(),
        'file_mime'=> $file->getClientMimeType(),
        'file_path'=> 'img/albums/'.$filename
      ]);
    }
}
