<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function doctor()
    {
        return $this->belongsToMany(doctor::class, 'doctor_specialization');
    }
    
}
