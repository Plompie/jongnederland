@extends('layouts.beheer')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Artikel overzicht</h1>
            </div>
            <div class="column">
                <a href="{{route('artikels.create')}}" class="button is-primary is-pulled-right">
                    <i class="fas fa-plus-circle m-r-10"></i>
                    Nieuw artikel
                </a>
            </div>
        </div>
    <hr class="m-t-0">
      <div class="card">
        <div class="card-content">
          <table class="table is-hoverable table is-fullwidth">
            <thead>
              <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Koptekst</th>
                <th>Body</th>
                <th>Afbeelding</th>
                <th>Acties</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($posts as $post)
                <tr>
                  <th>{{$post->id}}</th>
                  <td>{{$post->title}}</td>
                  <td>{{substr($post->header, -20)}}</td>
                  <td>{{substr($post->body, -20)}}</td>
                  <td>
                  @if(empty($post->image))
                    Geen afbeelding
                  @else
                    {{$post->image}}
                  @endif
                  </td>
                  <td>
                    <form action="{{ route('artikels.destroy', ['id'=>$post->id]) }}" method="POST">
                      <a class="button is-outlined m-r-10" href="{{route('artikels.edit', ['id' => $post->id]) }}">
                        Bewerken
                      </a>
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">

                      <input class="button is-outlined m-r-10" type="submit" value='Verwijderen' class="btn btn-danger">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>


@endsection