<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function clinics()
    {
        return $this->hasMany('App\clinic');
    }
}