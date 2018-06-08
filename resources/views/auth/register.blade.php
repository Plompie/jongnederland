@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Registratie</h1>
                <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="nickname" class="label">Naam</label>
                    <p class="control">
                        <input class="input {{$errors->has('nickname') ? 'is-danger' : ''}}" type="text" name="nickname" id="nickname" value="{{old('nickname')}}" required>
                    </p>
                    @if ($errors->has('nickname'))
                    <p class="help is-danger">Ongeldige naam</p>
                    @endif
                </div>
                <div class="field">
                    <label for="email" class="label">E-mailadres</label>
                    <p class="control">
                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" required>
                    </p>
                    @if ($errors->has('email'))
                    <p class="help is-danger">Ongeldig e-mailadres</p>
                    @endif
                </div>

                <div class="field">
                    <label for="password" class="label">Wachtwoord</label>
                    <p class="control">
                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                    </p>
                </div>
                <div class="field">
                    <label for="password_confirmation" class="label">Wachtwoord bevestigen</label>
                    <p class="control">
                        <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                    </p>
                    @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">Wachtwoorden komt niet overeen</p>
                    @endif
                </div>

                <button class="button is-info is-outlined is-fullwidth m-t-30">Registreren</button>
            </div> {{-- einde van .card-content --}}
            </form>
        </div>  {{--einde van .card--}}
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Beschik je al over een account?</a></h5>
    </div>
</div>

@endsection
