<?php

namespace App\Http\Controllers;

use App\Event;
use App\Registration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvent(){
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('other.events', ['events' => $events]);
    }



    public function getRegisterForEvent($id){
        $event = Event::where('id', $id)->first();
        $registration = new Registration();
        $event->registrations()->save($registration);
        return redirect()->back();
    }
}
