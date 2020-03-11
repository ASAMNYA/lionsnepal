<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class AreaCordinatorActivity extends Model
{
    protected $table='area_cordinator_activity';

    public function arearegion()
    {
    	return $this->belongsTo('App\Models\Sms\AreaCordinatorRegion','region','id');
    }

    protected $guarded=[];

}
