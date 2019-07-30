@extends('layouts.master')

@section('content')

    <div class="container">

        @foreach($events as $event)
            <div class="jumbotron">
               
                <h2 class="display-4">{{$event['title']}}</h2>
                <hr class="my-4">
                <p>{{$event['speaker']}}</p>
                <p>{{$event['description']}}</p>

                <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => $event['id']])}}" role="button">details</a>
                <hr class="my-4">

            </div>
    @endforeach
    </div>
@endsection