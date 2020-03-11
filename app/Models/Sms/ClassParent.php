<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class ClassParent extends Model
{
    protected $guarded = [];
    



    
	public function student()
    
    {

    	return $this->belongsToMany('App\Models\Sms\Student' , 'class_student','student_id','class_parent_id');
    }






    
}
