@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%">
    <br>
    <br>
    <div>
        {{-- This syntax allows the parsing of HTML --}}
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="row">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'mr-auto' ])!!}

                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                {!! Form::close() !!} 
            </div>
        @endif
    @endif
@endsection