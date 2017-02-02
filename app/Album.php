<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $table= 'albums';
  protected $fillable = [
    'name',
    'published'
  ];
  public function images(){
    return $this->hasMany('App\Image');
  }
}
