@extends('layouts.beheer')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10 m-b-0">
      <div class="column">
        <h1 class="title">Artikel toevoegen</h1>
      </div>
      <div class="column">
        {{-- <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a> --}}
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('artikels.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column is-three-quarters-desktop">
          <b-field>
            <b-input type="text" name="title" placeholder="Titel" size="is-large">
            </b-input>
          </b-field>
          <p>
            {{url('/blog')}}
          </p>
          <b-field class="m-t-10">
            <b-input type="textarea" name="header" placeholder="Koptekst..." rows="3">
            </b-input>
          </b-field>
          <b-field class="m-t-20">
            <b-input type="textarea" name="body"
                placeholder="Stel hier je meesterwerk samen..." rows="20">
            </b-input>
          </b-field>
        </div> <!-- end of .column.is-three-quarters -->
        <div class="column is-one-quarter-desktop is-narrow-tablet">
          <b-field>
            <div class="file has-name">
              <label class="file-label">
                <b-input class="file-input" type="file" name="image"></b-input>
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Kies een bestand...
                  </span>
                </span>
                <span class="file-name">
                  Afbeelding 1
                </span>
              </label>
            </div>
          </b-field>
            <div class="publish-buttons-widget widget-area">
              <div class="primary-action-button">
                <button type="submit" class="button is-primary is-fullwidth">Opslaan</button>
              </div>
            </div>
          </div>
        </div> <!-- end of .column.is-one-quarter -->
      </div>
    </form>

  </div> <!-- end of .flex-container -->

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {}
    });
  </script>
@endsection