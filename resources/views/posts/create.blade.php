@extends('layouts.app')

@section('content')

    <h1>Create Posts</h1>
    <!-- Taken From: Laravel Collective -->
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('title', 'Post Title')}}  
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}  
        </div> 

        <div class="form-group">
            {{Form::label('body', 'Post Contents')}}  
            {{Form::textarea('body', '', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Please Enter Your Post'])}}  
        </div> 
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}

    
@endsection