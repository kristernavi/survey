<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function fields()
    {
        return $this->hasMany(SurveyField::class, 'category_id');
    }
}
