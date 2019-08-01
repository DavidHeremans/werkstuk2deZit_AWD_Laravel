<?php

namespace App\Http\Controllers;

use App\Event;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function getEvent(){
        $events = Event::orderBy('created_at', 'desc')->get();
        $registrations = Registration::all();
        $regevent = DB::table('registrations')->select('event_id')->where('user_id', '=', Auth::id())->pluck('event_id');
        return view('other.events', ['events' => $events, 'registrations'=> $registrations, 'regevent'=> $regevent]);
    }

    public function getRegisterForEvent($id){
        $event = Event::where('id', $id)->first();
        $user = Auth::id();
        $registration = new Registration();
        $registration->user_id = $user;
        $event->registrations()->save($registration);
        return redirect()->back();
    }
}
