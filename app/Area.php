<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function clinic()
    {
        return $this->belongsToMany(clinic::class);
    }
}
