@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('partials.error')

        <form method="post" action="{{route('eventcreate')}}">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="onderwerp">Spreker</label>
                <input type="text" class="form-control" id="speaker" name="speaker">
            </div>
            <div class="form-group">
                <label for="onderwerp">Beschrijving</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="onderwerp">Locatie</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="onderwerp">Date + time</label>
                <input type="text" class="form-control" id="datetime" name="datetime">
            </div>
            <div class="form-group">
                <label for="onderwerp">Locatie foto</label>
                <input type="text" class="form-control" id="src" name="src">
            </div>
            <div class="form-group">
                <label for="onderwerp">Beschikbare plaatsen</label>
                <input type="text" class="form-control" id="availablePlaces" name="availablePlaces">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection