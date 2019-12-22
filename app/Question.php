<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function consulter()
    {
        return $this->belongsTo('App\Consulter');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
