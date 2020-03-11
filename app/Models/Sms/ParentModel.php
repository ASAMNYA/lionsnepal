<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    protected $guarded = [];
    protected $table="parents";


	public function address()
    
	    {

	    return $this->belongsToMany('App\Models\Sms\Address' , 'address_parent','parent_id','address_id');
	    
	    }








}
