<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

	public function teachername(){

		return $this->belongsTo('App\Models\Access\User\User','user_id','id');
		}
}
