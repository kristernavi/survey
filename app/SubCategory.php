<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $guarded = [];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id')
        ->withDefault([
            'name' => 'No parent'
            ]);
    }
}
