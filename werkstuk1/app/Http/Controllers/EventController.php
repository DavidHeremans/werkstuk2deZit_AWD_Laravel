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
        $registrations = Registration::where('user_id', '=', Auth::id())->value('id');
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

    public function getUnregisterForEvent($id){
        $event = Registration::find($id);
        $event->delete();

        return redirect()->action('EventController@getEvent');
    }

    public function postCreateEvent(Request $request){
        $this ->validate($request, [
            'title' => 'required|max:20',
            'speaker' => 'required|min:10',
            'description' => 'required|min:10',
            'location' => 'required|max:10',
            'datetime' => 'required',
            'src' => 'required',
            'availablePlaces' => 'required|max:5',
        ]);

        $event = new Event([
            'title' => $request->input('title'),
            'speaker' => $request->input('speaker'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'datetime' => $request->input('datetime'),
            'src' => $request->input('src'),
            'availablePlaces' => $request->input('availablePlaces')
        ]);

        $event->save();

        return redirect()->route('admin.index');
    }

    public function postUpdateEvent(Request $request){
        $this ->validate($request, [
            'title' => 'required|max:20',
            'speaker' => 'required|min:10',
            'description' => 'required|min:10',
            'location' => 'required|max:10',
            'datetime' => 'required',
            'src' => 'required',
            'availablePlaces' => 'required|max:5',
        ]);
        $event = Event::find($request->input('id'));


        $event->title = $request->input('title');
        $event->speaker = $request->input('speaker');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->datetime = $request->input('datetime');
        $event->src = $request->input('src');
        $event->availablePlaces = $request->input('availablePlaces');

        $event->save();

        return redirect()->route('admin.index');
    }
}
