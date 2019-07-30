<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function item(){
            return $this->belongsTo('App\Event');
        }
}
