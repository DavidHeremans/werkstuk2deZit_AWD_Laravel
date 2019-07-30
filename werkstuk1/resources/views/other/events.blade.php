@extends('layouts.master')

@section('content')
<br>

<div class="card-deck">
        @foreach($events as $event)
            <div class="card" >

                <img src="{{$event['src']}}" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title">{{$event['title']}}</h2>

                <p>{{$event['speaker']}}</p>
                <p class="card-text">{{$event['description']}}</p>

                    <p class="card-text">
                        <b>{{count($event->registrations)}} / {{$event->availablePlaces}}</b> |
                        @if(Auth::check())
                            <a href="{{route('eventregistration', ['id' => $event['id']])}}" class="btn btn-outline-primary btn-sm">Registreer</a>
                    @else
                        <p>Log in om te liken</p>
                        @endif
                        </p>
                </div>
                <div class="card-footer">
                <small class="text-muted">{{$event['location']}} | {{$event['datetime']}}</small>
                </div>
            </div>
            <br>
    @endforeach
</div>
@endsection