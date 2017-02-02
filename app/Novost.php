<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novost extends Model
{
    protected $table= 'news';
    protected $fillable = [
      'novost_title',
      'novost_body',
      'novost_img',
      'novost_data',
    ];
}
