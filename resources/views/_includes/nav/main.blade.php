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
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Spelendatabank</a>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Registreer</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="/documentation/overview/start/">
                                {{ Auth::user()->name }}
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
                            <a class="navbar-item" href="{{route('beheer.dashboard')}}">
                                <i class="fas fa-cog m-r-5"></i></i>
                                Beheer
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt m-r-5"></i>
                                Uitloggen
                                </a>
                                @include('_includes.forms.logout')
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </navbar>