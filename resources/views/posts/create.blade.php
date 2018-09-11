@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method="post">
                            @csrf
                            <label for="">
                                <input type="text" name="title">
                            </label>
                            <label for="">
                                <textarea name="content" id="" cols="30" rows="10"></textarea>
                            </label>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
