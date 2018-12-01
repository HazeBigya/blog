@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fas fa-clipboard-list"></i> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary "><i class="fas fa-pen-fancy"></i> Create Post </a>
                   
                   <br><br>
                    <h3>Your Blog Post</h3>
                        @if(count($posts) >0 )
                    <table class= "table table-striped">
                        
                            <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                
                        @foreach($posts as $post)
                        <tr>
                                <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary"><i class="fas fa-edit"></i> Edit</a></td>
                                    <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                         {{Form::hidden('_method','DELETE')}}
                                         {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                         {!!Form::close()!!}</td>
                            </tr>
                            @endforeach  
                        
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashboardpd"></div>
@endsection
