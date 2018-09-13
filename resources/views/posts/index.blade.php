@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post list</div>
                    <a href="{{route('posts.create')}}" class="btn">Create</a>
                    <div class="card-body">
                        <table class="table">
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{$post->userdata->name}}</td>
                                    <td>
                                        <a href="{{route('posts.edit', [$post->id])}}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
