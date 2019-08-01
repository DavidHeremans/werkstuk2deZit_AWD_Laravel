@extends('layouts.admin')

@section('content')
    <div class="container">

        <!--controle op sessie data -->
        @if(session('forminput'))
        <div class="alert alert-success" role="alert">
           <p>Zoekertje aangemaakt met titel: {{session('forminput')}} </p>
        </div>
        @endif
        <br>
        <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button">Create</a>
<hr>
        @foreach($items as $item)
        <div class="row">
            <h2 class="col-lg-8">Title: {{$item->title}}</h2>
            <a class="col-lg-2 btn btn-info btn-lg" href="{{route('admin.edit', ['id' => $item->id])}}" role="button">Edit</a>
            <a class="col-lg-2 btn btn-danger btn-xs" href="{{route('admin.delete', ['id' => $item->id])}}" role="button">Delete</a>
            <hr>
        </div>
            @endforeach

    </div>

@endsection