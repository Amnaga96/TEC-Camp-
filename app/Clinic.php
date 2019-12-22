<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function therapists()
    {
        return $this->belongsToMany('App\User'); // ->where('user_type', 'therapist')
    }
}
