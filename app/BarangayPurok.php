<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayPurok extends Model
{
    //
    protected $guarded = [];

    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }
    public function purok()
    {
        return $this->belongsTo(Purok::class);
    }
}
