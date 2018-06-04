<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jong Nederland</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <navbar class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/jongnederland-logo.png')}}" alt="jongnederland-logo">
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Activiteiten</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Informatie</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Over Ons</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Trainingen</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Webshop</a>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Registreer</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="/documentation/overview/start/">
                            Admin
                            </a>
                            <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="#">
                                <i class="fas fa-user-circle m-r-5"></i>
                                Profiel
                            </a>
                            <a class="navbar-item" href="#">
                                <i class="far fa-bell m-r-5"></i>
                                Meldingen
                            </a>
                            <a class="navbar-item" href="#">
                                <i class="fas fa-cog m-r-5"></i>
                                Instellingen
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="#">
                                <i class="fas fa-sign-out-alt m-r-5"></i>
                                Uitloggen
                            </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </navbar>
        @yield('content')
    </div>
</body>
</html>
