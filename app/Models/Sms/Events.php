<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
     protected $guarded = [];
     
     public function user()
    {
    	return $this->belongsTo('App\Models\Access\User\User');
    }
}
