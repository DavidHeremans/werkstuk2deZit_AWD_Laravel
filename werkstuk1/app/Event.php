<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['title', 'speaker', 'description', 'location', 'src', 'availablePlaces'];
}
