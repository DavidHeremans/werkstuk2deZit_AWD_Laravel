@extends('layouts.master')

@section('content')

    <div class="container">
    <div class="jumbotron">
        <h2>Zoekertje 1</h2>
        <p class="lead">Info</p>
        <hr class="my-4">
        <p>nice zoekertje man</p>
        <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 1])}}" role="button">details</a>
        </div>

        <div class="jumbotron">
            <h2>Zoekertje 2</h2>
            <p class="lead">Info</p>
            <hr class="my-4">
            <p>nice zoekertje man</p>
             <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 2])}}" role="button">details</a>
        </div>

        <div class="jumbotron">
            <h2>Zoekertje 3</h2>
            <p class="lead">Info</p>
            <hr class="my-4">
            <p>nice zoekertje man</p>
            <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => 3])}}" role="button">details</a>

        </div>

    </div>

    @endsection
