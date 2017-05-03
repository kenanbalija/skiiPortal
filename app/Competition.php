<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
      'name',
      'date',
   	  'disciplina',
      'results'
    ];
}
