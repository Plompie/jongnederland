@extends('layouts.beheer')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Nieuwe gebruiker</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('gebruikers.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Naam:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">E-mailadres:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Wachtwoord:</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Geef handmatig een wachtwoord in">
              <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto genereer een wachtwoord</b-checkbox>
            </p>
          </div>
        </div> <!-- end of .column -->
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-left" style="width: 250px;">Opslaan</button>
        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        rolesSelected: {!! old('roles') ? old('roles') : '[]' !!}
      }
    });
  </script>
@endsection
