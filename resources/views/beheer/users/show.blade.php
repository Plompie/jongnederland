@extends('layouts.beheer')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Gebruiker details</h1>
        </div>
        <!-- end of column -->

        <div class="column">
            <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">
                <i class="fa fa-user m-r-10"></i> Bewerk gebruiker</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <div class="field">
                <label for="name" class="label">Naam</label>
                <pre>{{$user->name}}</pre>
            </div>

            <div class="field">
                <div class="field">
                    <label for="email" class="label">E-mailadres</label>
                    <pre>{{$user->email}}</pre>
                </div>
            </div>

            <div class="field">
                <div class="field">
                    <label for="roles" class="label">Rollen</label>
                    <ul>
                        {{$user->roles->count() == 0 ? 'Deze gebruiker heeft nog geen rechten' : ''}}
                        @foreach($user->roles as $role)
                            <li>{{$role->display_name}} {{$role->description}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
