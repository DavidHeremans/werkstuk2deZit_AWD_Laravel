@extends('layouts.master')

@section('content')
  <!-- <img src="/images/IMG_0145.PNG" alt="image"> -->

    <div class="container">
        @foreach($items as $item)
            <div class="jumbotron">

                <h2 class="display-4">{{$item['title']}}</h2>
                <hr class="my-4">
                <p>{{$item['content']}}</p>
                @foreach($item->tags as $tag)
                    <p>- {{$tag->name}} -</p>
                @endforeach
                <a class="btn btn-primary btn-lg" href="{{route('item', ['id' => $item['id']])}}" role="button">details</a>
                <hr class="my-4">
                <p>{{$item['created_at']}}</p>
            </div>
         @endforeach

        <div class="mx-auto" style="width: 200px">
       {{$items->links("pagination::bootstrap-4")}}
        </div>

    </div>

    @endsection
