@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div>
                        <ul>
                            @if ($errors)
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="{{route('posts.update', ['id' => $post->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">
                                <input type="text" name="title" value="{{$post->title}}">
                            </label>
                            {{--<input type="hidden" value="{{$post->id}}">--}}
                            <label for="">
                                <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
                            </label>
                            <input type="file" name="kartinka">
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
