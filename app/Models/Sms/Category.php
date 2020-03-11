<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $guarded = [];

     public function blog()
  {
  	return $this->hasMany('App\Models\Sms\Blog');
  }
}
