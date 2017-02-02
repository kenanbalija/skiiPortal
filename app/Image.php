<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
      'album_id',
      'file_name',
      'file_size',
      'file_mime',
      'file_path'
    ];
    public function album(){
      return $this->belongsTo('App\Album');
    }
}
