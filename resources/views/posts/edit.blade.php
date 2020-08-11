@extends('layouts.app')

@section('content')

    <h1>Edit Posts</h1>
    <!-- Taken From: Laravel Collective -->
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('title', 'Post Title')}}  
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}  
        </div> 

        <div class="form-group">
            {{Form::label('body', 'Post Contents')}}  
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Please Enter Your Post'])}}  
        </div> 
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}

    
@endsection