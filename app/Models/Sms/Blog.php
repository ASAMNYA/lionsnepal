<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo('App\Models\Sms\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\Access\User\User');
    }
}
