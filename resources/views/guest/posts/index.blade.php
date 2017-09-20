@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-5">
                        <img src="http://via.placeholder.com/300x150" alt="" style="width: 100%; margin-top: 30px;">
                    </div>
                    <div class="col-md-7">
                        <div class="post">
                            <h3><a href="{{ route('guest.blog.show', $post->id) }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
        <div class="col-md-3">
            Here will be categories and archive
        </div>
    </div>
</div>
@endsection
