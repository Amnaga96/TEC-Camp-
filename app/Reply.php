<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function replier()
    {
        return $this->morphTo('replier');
    }
}
