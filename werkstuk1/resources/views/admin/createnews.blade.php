@extends('layouts.admin')

@section('content')

    <div class="container">

       @include('partials.error')

        <form method="post" action="{{route('itemcreate')}}">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <div class="form-group">
                <label for="onderwerp">Meer info</label>
                <input type="text" class="form-control" id="fullcontent" name="fullcontent">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection