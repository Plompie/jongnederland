@extends('layouts.beheer')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Nieuwe gebruiker</h1>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="label">Naam</label>
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
                    <label for="password" class="label">Wachtwoord</label>
                    <p class="control">
                        <input type="text" class="input" name="password" id="password" v-if="!auto_password">
                        <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Genereer automatisch een wachtwoord</b-checkbox>
                    </p>
                </div>

                <button class="button is-success">Gebruiker Aanmaken</button>
            </form>
        </div>
    </div>

</div>
<!-- end of .flex-container -->
@endsection @section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            auto_password: true
        }
    });

</script>
@endsection
