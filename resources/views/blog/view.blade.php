@extends('layouts.app')

@section('content')

<div class="container m-t-50">
    <div class="columns">
        <div class="column is-one-quarter-desktop">
                <figure class="image box">
                    <img src="{{ asset('images/jongnl-logo2.png')}}">
                </figure>
            </div>
        <div class="column is-three-quarters-desktop">
            <div class="content is-large">
                <h2 class="subtitle is-1">{{ $post->title }}</h2>
                <hr>
                <p>{{ $post->header }}</p>
                <figure class="box">
                    <img src="{{ asset('images/' . $post->image)}}">
                </figure>
                <p>{{ $post->body }}</p>
                                    <hr>
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Laatst geüpdate:</p>
                            <p class="subtitle">{{ $post->updated_at }}</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Aangemaakt op:</p>
                            <p class="subtitle">{{ $post->created_at }}</p>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection