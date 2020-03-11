<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class OrgLevelCat extends Model
{
    protected $guarded = [];

    public function members() {
        return $this->hasMany(OrgLevel::class, 'org_level_categories_id');
    }
}
