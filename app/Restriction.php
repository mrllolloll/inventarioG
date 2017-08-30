<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restriction extends Model
{
  protected $fillable = [
      'id','camptables_id','objetive_id','afected_camptables_id','default_option',
  ];
}
