@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron">

            <h2 >Titel: {{$item->title}}</h2>
            <hr class="my-4">

            <p>Onderwerp: {{$item->content}}</p>
            <hr>

            <p>{{$item->fullcontent}}</p>

            <p>
                <b>{{count($item->likes)}} likes</b> |
                @if(Auth::check())
                <a href="{{route('itemlike', ['id' => $item['id']])}}" class="btn btn-outline-primary btn-sm" >Like</a>
                @else
                <p>Log in om te liken</p>
                @endif
            </p>

        </div>
    </div>

@endsection
