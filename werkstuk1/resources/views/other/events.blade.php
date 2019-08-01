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

                    <div class="card-text">
                        <b>{{count($event->registrations)}} / {{$event->availablePlaces}}</b> |

                        @if(Auth::check() )
                                @if($regevent->contains($event['id']))

                                <p>Al geregistreerd</p>
                                @else
                                <a href="{{route('eventregistration', ['id' => $event['id']])}}" class="btn btn-outline-primary btn-sm">Registreer</a>

                            @endif

                        @else
                            <p>Log in om te liken</p>
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
@endsection