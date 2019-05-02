@extends('layouts.master')

@section('content')
    <h2> List of all notes</h2>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="card mb-3" style="min-width: 18rem;">
                                <div class="card-header bg-dark text-white">
                                        {{$post->title}}
                                </div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4> {{$post->title}}</h4>
                                    </div>
                                    <div class="card-text">
                                        {{$post->body}}
                                    </div>
                                    <hr>
                                <a href="{{ '/posts/' . $post->id}}" class="btn btn-primary"> Show More</a>
                                </div>    
                            </div>
                       </div>
                    @endforeach
                </div>
 
            </div>
            
        </div>


    </div>


@endsection