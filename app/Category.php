<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function subs()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
