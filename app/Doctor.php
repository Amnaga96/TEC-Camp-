<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function Clinic()
    {
        return $this->belongsToMany(clinic::class);
    }
    
    public function specialization()
    {
        return $this->belongsToMany(specialization::class);
    }
}
