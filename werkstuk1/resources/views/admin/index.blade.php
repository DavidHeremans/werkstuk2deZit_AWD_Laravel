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


        <br>
        <div class="row text-center">
            <div class="col-lg">
                <a class="btn btn-primary btn-lg col-xs" href="{{route('admin.createnews')}}" role="button">Create nieuwsbericht</a>
                <hr>
                <h2>Nieuwsberichten</h2>
                <br>
                @foreach($items as $item)
                    <div class="row">

                        <div class="col-md">
                            <h3>Title: {{$item->title}}</h3>
                            <a class="col-lg-2 btn btn-info" href="{{route('admin.editnews', ['id' => $item->id])}}"
                               role="button">Edit</a>
                            <a class="col-lg-2 btn btn-danger "
                               href="{{route('admin.deletenews', ['id' => $item->id])}}"
                               role="button">Delete</a>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>

            <div class="col-lg">
                <a class="btn btn-primary btn-lg col-xs" href="{{route('admin.createevent')}}" role="button">Create event</a>
                <hr>
                <h2>Events</h2>
                <br>
                @foreach($events as $event)
                    <div class="row">

                        <div class="col-md">
                            <h3 >Title: {{$event->title}}</h3>
                            <a class="col-lg-2 btn btn-info " href="{{route('admin.editevent', ['id' => $event->id])}}"
                               role="button">Edit</a>
                            <a class="col-lg-2 btn btn-danger"
                               href="{{route('admin.deleteevent', ['id' => $event->id])}}"
                               role="button">Delete</a>
                        </div>

                    </div>
                    <br>
                @endforeach
            </div>


        </div>

@endsection