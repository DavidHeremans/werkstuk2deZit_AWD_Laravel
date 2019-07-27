@extends('layouts.admin')

@section('content')

    <div class="jumbotron">

        <!--controle op sessie data -->
        @if(session('forminput'))
        <div class="alert alert-success" role="alert">
           <p>Zoekertje aangemaakt met titel: {{session('forminput')}} </p>
        </div>
        @endif

        <h2>Nieuwsbericht 4</h2>
        <p class="lead">Dit is zeer interessant</p>
        <hr class="my-4">
        <p>Dit moet je zeker gedaan hebben</p>
        <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button">Create</a>
        <a class="btn btn-primary btn-lg" href="{{route('admin.edit')}}" role="button">Edit</a>
    </div>

@endsection