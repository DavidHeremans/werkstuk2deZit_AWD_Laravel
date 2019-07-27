@extends('layouts.master')

@section('content')

    <div class="container">
    <div class="jumbotron">
        <h2>Nieuwsbericht 1</h2>
        <p class="lead">Goed nieuws</p>
        <hr class="my-4">
        <p>nice zoekertje man</p>
        <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 1])}}" role="button">details</a>
        </div>

        <div class="jumbotron">
            <h2>Nieuwsbericht 2</h2>
            <p class="lead">Informatief nieuws</p>
            <hr class="my-4">
            <p>nice zoekertje man</p>
             <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 2])}}" role="button">details</a>
        </div>

        <div class="jumbotron">
            <h2>Nieuwsbericht 3</h2>
            <p class="lead">Raar nieuws</p>
            <hr class="my-4">
            <p>nice zoekertje man</p>
            <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 3])}}" role="button">details</a>

        </div>

    </div>

    @endsection
