<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyCrop extends Model
{
    //
    protected $guarded = [];

    public function vegetables()
    {
        return $this->hasMany(VegetableCrop::class, 'crop_id');
    }
}
