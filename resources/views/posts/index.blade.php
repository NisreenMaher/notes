@extends('layouts.master')

@section('content')

    <h2>    <img src="{!! asset('icon.png') !!}"> List of all Notes </h2>

    <hr>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="row">
                    <table id="t01">


                        <tr>
                            <th style="width:130px;">Date</th>
                            <th style="width: 150px">title</th>
                            <th style="width: 500px">content</th>
                            <th style="width: 180px">modify</th>
                        </tr>
                        @foreach($posts as $post)



                            <tr>
                                <td >    <small class="text-muted"> <p> {{$post->created_at->format('Y-m-d')}}</p></small></td>

                                <td> {{$post->title}}</td>
                                <td>  {{$post->body}}</td>
                                <td>    <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-primary float-left mr-2"> Edit</a>
                                    <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-left"> Delete</button>

                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </table>
                </div>

            </div>

        </div>

        <div class="col-md-3">
            <div class="card ml-3" style="max-width: 10rem;">
                <div class="card-header bg-info text-white" > Stats.</div>
                <div class="card-body">

                    <p class="card-text"> All Notes: {{$count}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
@endsection