<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function clinics()
    {
        return $this->belongsToMany(clinic::class, 'clinic__doctors');
    }
    
    public function specialization()
    {
        return $this->belongsToMany(specialization::class, 'doctor_specialization');
    }
}
