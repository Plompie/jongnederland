@extends('layouts.beheer')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Gebruiker overzicht</h1>
            </div>
            <div class="column">
                <a href="{{route('gebruikers.create')}}" class="button is-primary is-pulled-right">
                    <i class="fas fa-plus-circle m-r-10"></i>
                    Nieuwe gebruiker
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
                <th>Naam</th>
                <th>E-mailadres</th>
                <th>Aangemaakt op</th>
                <th>Acties</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                  <td>
                    <form action="{{ route('gebruikers.destroy', ['id'=>$user->id]) }}" method="POST">
                      <a class="button is-outlined m-r-10" href="{{route('gebruikers.edit', $user->id)}}">
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
{{$users->links()}}

@endsection