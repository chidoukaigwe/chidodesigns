@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @if(count($posts) > 0)

        @foreach ($posts as $post)

            <div class="card">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%">
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        {{-- <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> --}}
                    </div>
                </div>
                <div class="card-header">

                </div>
            </div>

        @endforeach
        {{-- Creates Pagination --}}
        {{$posts->links()}}
    @else

        <p>No Posts Found</p>

    @endif
    
@endsection