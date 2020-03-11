<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class OrgLevel extends Model
{


    
    use NodeTrait;

    protected $guarded = [];

    public	function firstnode($cat){
    	return $this->where('orglevel_id',0)->where('org_level_categories_id',$cat)->first();
    }
    public	function secondnode($cat){
    	return $this->where('orglevel_id',1)->where('org_level_categories_id',$cat)->get();
    }
     public	function thirdnode($cat,$org_level){
    	return $this->where('orglevel_id',$org_level)->where('org_level_categories_id',$cat)->get();
    }


    public function org_category_name()
    {
        return $this->belongsTo('App\Models\Sms\OrgLevelCat','org_level_categories_id','id');
    }
}
