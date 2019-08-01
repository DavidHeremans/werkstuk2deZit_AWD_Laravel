@extends('layouts.master')

@section('content')

    <div class="container">
        <p> {{$user->name}}</p>
        <p> {{$user->email}}</p>
    <br>
        @include('partials.error')

        <form method="post" action="{{route('userupdate')}}">
        <div class="form-group">
            <label for="titel">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="onderwerp">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>

        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{Auth::id()}}">
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
    </div>
    <br>

    @endsection