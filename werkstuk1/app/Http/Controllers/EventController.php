<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvent(){
        $events = Event::orderBy('created_at', 'desc')->first();
        return view('other.event', ['events' => $events]);
    }
}
