@extends('layouts.app')

@section('content')
<div class="container">
<br>
<a href="/posts" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Go Back</a>
<div class="smallpd"></div>
    <h1>{{$post->title}}</h1>
    <div class="smallpd"></div>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
  
    <div class="smallpd"></div>
    <div>
        {!!$post->body!!}
    </div>
    <hr>  
        <small><h6>Written on : {{$post->created_at}} &nbsp by &nbsp {{$post->user->name}}</h6></small> 
        <hr>
        <div class="smallpd"></div>
        @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark"><i class="fas fa-edit"></i> Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            @endif
        @endif
        </div>
        <div class="smallpd"></div>
         <div class="smallpd"></div>
         <div class="comments">
        <script type="text/javascript">(function(d, t, e, m){
    window._rws = window._rws || [{
        huid: "411684",
        uid: "54ff97c40e698ad7dfed90d349447413",
        source: "addthis",
        options: {
            "size": "medium",
            "style": "oxygen",
            "isDummy": false
        } 
    }];
<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{ $post -> id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://laravelblog-14.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
  
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <script id="dsq-count-scr" src="//laravelblog-14.disqus.com/count.js" async></script>          
     
        
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://laravelblog-14.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
 </div>  
@endsection
