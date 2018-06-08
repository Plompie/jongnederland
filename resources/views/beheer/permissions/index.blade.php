@extends('layouts.beheer')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Permissie overzicht</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fas fa-plus-circle m-r-10"></i> Nieuwe permissie</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
      <div class="card-content">
        <table class="table is-hoverable table is-fullwidth">
          <thead>
            <tr>
              <th>Naam</th>
              <th>Slug</th>
              <th>Beschrijving</th>
              <th>Acties</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td><a class="button is-outlined is-small m-r-5" href="{{route('permissions.show', $permission->id)}}">Bekijken</a><a class="button is-outlined is-small" href="{{route('permissions.edit', $permission->id)}}">Bewerken</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->
  </div>
  {{$permissions->links()}}
@endsection