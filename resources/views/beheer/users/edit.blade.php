@extends('layouts.beheer')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Gebruiker bewerken</h1>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <form action="{{route('users.update', $user->id)}}" method="POST">
                {{method_field('PUT')}} {{csrf_field()}}
                <div class="field">
                    <label for="name" class="label">Naam:</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                    </p>
                </div>

                <div class="field">
                    <label for="email" class="label">E-mailadres:</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                    </p>
                </div>
                <div class="field">
                    <b-radio name="password_options" v-model="password_options" native-value="keep">Maak geen veranderingen</b-radio>
                </div>
                <div class="field">
                    <b-radio name="password_options" v-model="password_options" native-value="auto">Auto-genereer een wachtwoord</b-radio>
                </div>
                <div class="field">
                    <b-radio name="password_options" v-model="password_options" native-value="manual">Verander het wachtwoord</b-radio>
                    <p class="control">
                        <input type="password" class="input m-t-15" name="password" id="password" v-if="password_options == 'manual'" placeholder="Voer handmatig een nieuw wachtwoord in"
                            required>
                    </p>
                </div>
                </b-radio-group>
              <label for="roles" class="label">Rollen:</label>
              <input type="hidden" name="roles" :value="rolesSelected" />
    
              <b-checkbox-group v-model="rolesSelected">
                @foreach ($roles as $role)
                  <div class="field">
                    <b-checkbox v-model="rolesSelected" :custom-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                  </div>
                @endforeach
              </b-checkbox-group>
              <button class="button is-primary m-t-15">Opslaan</button>
            </div>
          </div>
        </form>
</div>

</div>
<!-- end of .flex-container -->
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data() {
            return {
                password_options: 'keep',
                roles_selected: {!! $user->roles->pluck('id') !!}
            }
        }
    });
</script>
@endsection
