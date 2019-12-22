<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function doctor()
{
    return $this->belongsToMany(doctor::class);
}
 
public function area()
{
    return $this-belongsTo('app\area');
}

}
