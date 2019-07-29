@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>This is item</h2>
            <hr class="my-4">
            <p class="lead">Titel: {{$item->title}}</p>
            <br>
            <p>Onderwerp: {{$item->content}}</p>
        </div>
    </div>

@endsection
