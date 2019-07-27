@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <h2>This is item</h2>
            <br>
            <p>Titel: {{$nieuwsbericht['titel']}}</p>
            <br>
            <p>Onderwerp: {{$nieuwsbericht['onderwerp']}}</p>
        </div>
    </div>

@endsection
