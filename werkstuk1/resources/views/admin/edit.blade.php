@extends('layouts.admin')

@section('content')

    <div class="container">
        <form method="post" action="{{route('itemcreate')}}">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" class="form-control" id="content">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection