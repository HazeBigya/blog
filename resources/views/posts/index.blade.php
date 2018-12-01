@extends('layouts.app')

@section('content')
<div class="posts"><h2>Posts</h2></div>
    <div class="postpd">
        <div class="row">
        
            <div class="col-md-9" >
            @if(count($posts) > 0)
                 @foreach($posts as $post)
                    <div class="card-group">
                        <div class="card bg-light p-2">
                            <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                <div class="col-md-8 col-sm-8">
                                     <h3><a href="/posts/{{$post->id}}" class="text-dark">{{$post->title}}</a></h3>
                                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                </div>
                            </div>     
                        </div>
                     </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p> No Posts Found </p>
            @endif
            
        </div>
        @include('inc.sidebar')
        </div>
    </div>
</div>


    @endsection
