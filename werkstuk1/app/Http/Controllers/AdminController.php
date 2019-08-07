<?php

namespace App\Http\Controllers;

use App\Event;
use App\Item;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getEditNews($id)
    {
        $item = Item::find($id);
        $tags = Tag::all();
        return view('admin.editnews', ['item' => $item, 'itemId' => $id, 'tags' => $tags]);
    }

    public function getEditEvent($id)
    {
        $event = Event::find($id);
        return view('admin.editevent', ['event' => $event, 'eventId' => $id]);
    }

    public function getCreateNews()
    {
        return view('admin.createnews');
    }

    public function getCreateEvent()
    {
        return view('admin.createevent');
    }

    public function getIndex()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('admin.index', ['items' => $items, 'events' => $events]);
    }

    public function getDeleteNews($id)
    {
        $item = Item::find($id);
        $item->likes()->delete();
        $item->tags()->detach();
        $item->delete();

        return redirect()->action('AdminController@getIndex');
    }

    public function getDeleteEvent($id)
    {
        $event = Event::find($id);
        $event->registrations()->delete();
        $event->delete();

        return redirect()->action('AdminController@getIndex');
    }


}
