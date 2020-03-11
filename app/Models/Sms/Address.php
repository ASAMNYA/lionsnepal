<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];



	public function student()
    
    {

    	return $this->belongsToMany('App\Models\Sms\Student' , 'address_student','student_id','address_id');
    }




    public function parentmodel()
    
	    {

	    return $this->belongsToMany('App\Models\Sms\ParentModel' , 'address_parent','parent_id','address_id');
	    
	    }






}
