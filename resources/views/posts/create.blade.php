@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="create">
    <h1><b>Create Post</b></h1>
    </div>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
           <h4> <b>{{Form::label('title','Title :')}}</b> </h4>
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
               <h4> <b>{{Form::label('body','Body :')}}</b> </h4>
                {{Form::textarea('body','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('thumnail','Thumbnail :')}}</b>
                {{form::file('cover_image')}}
            </div>
            <div class="smallpd"></div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div> 
<div class="blogpd"></div>
    @endsection
