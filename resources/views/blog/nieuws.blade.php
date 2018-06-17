@extends('layouts.app')

@section('content')

@foreach($posts as $post)
<div class="container m-t-30">
    <div class="box" style="background-color: #FAFAFA">
    <article class="media">
        <div class="media-content">
            <div class="content">
                <p>
                <h4 class="h1 has-text-centered"><strong>{{ $post->title }}</strong></h1>
                <hr>
{{--                  <figure class="image is-5by1">
                    <img src="{{ asset('images/' . $post->image)}}">
                </figure>  --}}
                </p>
                <p class="has-text-centered">{{ $post->header }}</p>
                <div class="box has-text-centered" style="background-color: #FAFAFA">
                <a class="button is-primary has-text-centered" href="{{ route('artikel.show', ['id' => $post->id]) }}">Lees meer..</a>
                </div>
            </div>
        </div>
    </article>
    </div>
</div>
@endforeach

@endsection