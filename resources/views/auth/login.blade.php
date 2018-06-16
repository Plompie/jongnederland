@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Login</h1>
                <form action="{{route('login')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="email" class="label">E-mailadres</label>
                    <p class="control">
                        <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="voorbeeld@voorbeeld.nl" value="{{old('email')}}">
                    </p>
                    @if ($errors->has('email'))
                    <p class="help is-danger">Onjuist e-mailadres</p>
                    @endif
                </div>

                <div class="field">
                    <label for="password" class="label">Wachtwoord</label>
                    <p class="control">
                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                    </p>
                    @if ($errors->has('password'))
                    <p class="help is-danger">Onjuist wachtwoord</p>
                    @endif
                </div>

                <button class="button is-info is-outlined is-fullwidth m-t-30 cta-blue">Log in</button>
            </div> {{-- einde van .card-content --}}
            </form>
        </div>  {{--einde van .card--}}
        <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Wachtwoord vergeten?</a></h5>
    </div>
</div>

@endsection
