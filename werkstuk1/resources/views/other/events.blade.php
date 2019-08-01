@extends('layouts.master')

@section('content')
<br>
<div class="container">
<div class="card-deck">



        @foreach($events as $event)
            <div class="card text-center" >

                <img src="{{$event['src']}}" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title">{{$event['title']}}</h2>

                <p>{{$event['speaker']}}</p>
                <p class="card-text">{{$event['description']}}</p>

                    <div class="card-text">
                     <p> <b>{{count($event->registrations)}} / {{$event->availablePlaces}}</b></p>

                        @if(Auth::check() )
                                @if($regevent->contains($event['id']))
                                <a href="{{route('unregister', ['id' => $registrations])}}" class="btn btn-outline-danger btn-sm">Schrijf uit</a>

                            @elseif(count($event->registrations) ===  $event->availablePlaces)
                                    <p>Volzet </p>
                                    @else
                                <a href="{{route('eventregistration', ['id' => $event['id']])}}" class="btn btn-outline-primary btn-sm">Registreer</a>

                            @endif

                        @else
                            <p>Log in om te registreren</p>
                        @endif


                        </div>


                </div>
                <div class="card-footer">
                <small class="text-muted">{{$event['location']}} | {{$event['datetime']}}</small>
                </div>
            </div>
            <br>
    @endforeach
</div>
    </div>
    <br>
@endsection