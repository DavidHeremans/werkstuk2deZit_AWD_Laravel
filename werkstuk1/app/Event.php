<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['title', 'speaker', 'description', 'location', 'datetime' , 'src', 'availablePlaces'];

    public function registrations(){
        return $this->hasMany('App\Registration');
    }
}
