<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    //
    protected $guarded = [];

    public function barangay()
    {
        return $this->belongsTo(Barangay::class)
        ->withDefault([
            'name' => 'No Barangay'
            ]);
    }

    public function purok()
    {
        return $this->belongsTo(Purok::class)
        ->withDefault([
            'number' => 'No purok'
            ]);
    }
    public function getFullnameAttribute()
    {
        return ucfirst("{$this->firstname} {$this->middlename} {$this->lastname}");
    }
}
