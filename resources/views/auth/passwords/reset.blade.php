@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Reset Je Wachtwoord</h1>
                <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">
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
                        <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password_confirmation" name="password_confirmation" id="password_confirmation" required>
                    </p>
                    @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">Wachtwoorden komt niet overeen</p>
                    @endif
                </div>

                <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Wachtwoord</button>
            </div> {{-- einde van .card-content --}}
            </form>
        </div>  {{--einde van .card--}}
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Beschik je al over een account?</a></h5>
    </div>
</div>

@endsection
