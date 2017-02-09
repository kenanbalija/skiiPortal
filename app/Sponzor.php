<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponzor extends Model
{
    protected $table = "sponsors";
    protected $fillable = [
      'name',
      'img',
      'link',
      'sponzor_data'
    ];
}
