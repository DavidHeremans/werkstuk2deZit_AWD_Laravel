@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>This is item</h2>
            <hr class="my-4">
            <p class="lead">Titel: {{$item->title}}</p>
            <br>
            <p>Onderwerp: {{$item->content}}</p>
            <hr>
            <p><b>{{count($item->likes)}} likes</b> |
                <a href="{{route('itemlike', ['id' => $item['id']])}}" class="btn btn-outline-primary btn-sm">Like</a>

            </p>
        </div>
    </div>

@endsection
