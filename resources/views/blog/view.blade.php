@extends('layouts.app')

@section('content')

<div class="container m-t-50">
    <div class="box" style="background-color: #FAFAFA">
        <div class="content is-large">
            <h1 class="has-text-centered">{{ $post->title }}</h1>
            <hr>
            <p>{{ $post->header }}</p>
            <hr>
            <p>{{ $post->body }}</p>
            @if(!empty($post->image))
            <figure class="image">
                <img src="{{ asset('images/' . $post->image)}}">
            </figure>
            @endif
        </div>
    </div>
</div>

@endsection