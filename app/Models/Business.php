<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    public function category(){
        return $this->hasMany(BusinessCategory::class,"business_id","id");
    }
}
