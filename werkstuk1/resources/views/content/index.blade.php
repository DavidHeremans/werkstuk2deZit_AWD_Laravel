@extends('layouts.master')

@section('content')
    <img src="/images/IMG_0145.PNG" alt="Responsive image">

    <div class="container">
        @foreach($items as $item)
            <div class="jumbotron">
                <h2>Nieuwsbericht 1</h2>
                <p class="lead">{{$item['title']}}</p>
                <hr class="my-4">
                <p>{{$item['content']}}</p>
                <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => $item['id']])}}" role="button">details</a>
            </div>
         @endforeach


    </div>

    @endsection
