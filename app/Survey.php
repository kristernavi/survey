<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $table = 'surveries';

    public function crop_survey()
    {
        return $this->hasOne(SurveyCrop::class, 'survey_id');
    }
    public function dogs()
    {
        return $this->hasMany(DogPopulation::class, 'survey_id');
    }
    public function household()
    {
        return $this->belongsTo(Household::class, 'house_hold_id')
        ->withDefault([
            'fullname' => 'Unknown'
            ]);
    }
    public function type()
    {
        return $this->belongsTo(SubCategory::class, 'type_id')
        ->withDefault([
            'name' => 'Unknown'
            ]);
    }
}
