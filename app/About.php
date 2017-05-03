<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table= 'homeabout';
    protected $fillable = [
      'naslov1',
      'naslov2',
      'naslov3',
      'naslov4',
      'naslov1_body',
      'naslov2_body',
      'naslov3_body',
      'naslov4_body'
    ];
}
