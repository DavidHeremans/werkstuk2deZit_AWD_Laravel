@extends('layouts.admin')

@section('content')

    <div class="container">
        <form method="post" action="{{route('eventupdate')}}">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Spreker</label>
                <input type="text" class="form-control" id="speaker" name="speaker" value="{{$event->speaker}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Beschrijving</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$event->description}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Locatie</label>
                <input type="text" class="form-control" id="location" name="location" value="{{$event->location}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Date + time</label>
                <input type="text" class="form-control" id="datetime" name="datetime" value="{{$event->datetime}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Locatie foto</label>
                <input type="text" class="form-control" id="src" name="src" value="{{$event->src}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Beschikbare plaatsen</label>
                <input type="text" class="form-control" id="availablePlaces" name="availablePlaces" value="{{$event->availablePlaces}}">
            </div>


            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$event->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection