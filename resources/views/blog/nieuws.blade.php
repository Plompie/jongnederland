@extends('layouts.app')

@section('content')
<div class="container">
@foreach($posts as $post)

<div class="container m-t-50">
    <div class="box">
    <div class="columns">
        <div class="column is-one-quarter-desktop">
                <figure class="image">
                    <img src="{{ asset('images/' . $post->image)}}">
                </figure>
            </div>
        <div class="column is-three-quarters-desktop">
            <div class="content is-large">
                <h2 class="subtitle is-1">{{ $post->title }}</h2>
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
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Lees meer:</p>
                            <a class="button is-primary has-text-centered" href="{{ route('artikel.show', ['id' => $post->id]) }}">Bezoeken</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection