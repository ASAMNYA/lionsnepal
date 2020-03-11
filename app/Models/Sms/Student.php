<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];


		public function address()
    
	    {

	    return $this->belongsToMany('App\Models\Sms\Address' , 'address_student','student_id','address_id');
	    
	    }


	    public function classparent()
    
	    {

	    return $this->belongsToMany('App\Models\Sms\ClassParent' , 'class_student','student_id','class_parent_id');
	    
	    }


	public function studentname(){

		return $this->belongsTo('App\Models\Access\User\User','user_id','id');
		}



}
