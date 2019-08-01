@extends('layouts.master')

@section('content')
  <!-- <img src="/images/IMG_0145.PNG" alt="image"> -->
<br>
  <div class="container text-white">
      <div class="jumbotron bg-dark">
      <h1 class="display-4">EhackB is terug!</h1>
      <h2>17 - 18 april</h2>
      <p>Campus Kaai</p>
      <p>Totaal registraties: {{$users}}</p>
      </div>
  </div>
    <div class="container">
        @foreach($items as $item)
            <div class="jumbotron">

                <h2 class="display-4">{{$item['title']}}</h2>
                <hr class="my-4">
                <p>{{$item['content']}}</p>
                @foreach($item->tags as $tag)
                    <p>- {{$tag->name}} -</p>
                @endforeach
                <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => $item['id']])}}" role="button" >details</a>
                <hr class="my-4">
                <p>{{$item['created_at']}}</p>
            </div>
         @endforeach

        <div class="mx-auto" style="width: 200px">
       {{$items->links("pagination::bootstrap-4")}}
        </div>

    </div>

    @endsection
