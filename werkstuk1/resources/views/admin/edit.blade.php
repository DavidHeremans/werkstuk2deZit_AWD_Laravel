@extends('layouts.admin')

@section('content')

    <div class="container">
        <form method="post" action="{{route('itemupdate')}}">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$item->title}}">
            </div>
            <div class="form-group">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$item->content}}">
            </div>

            @foreach($tags as $tag)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{$item->tags->contains($tag->id) ? 'checked' : ''}}>
                        {{$tag->name}}
                    </label>
                </div>
                @endforeach

            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$item->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection