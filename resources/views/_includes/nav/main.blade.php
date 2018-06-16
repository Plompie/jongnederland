

    <nav class="navbar is-transparent has-shadow">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
            <img <img src="{{asset('images/jongnederland-logo.png')}}" alt="jongnederland-logo">
            </a>

            @if (Request::segment(1) == 'beheer')
            <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                <span class="icon"><i class="fas fa-chevron-circle-right"></i></span>
            </a>
            @endif

            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('activiteiten')}}">Activiteiten</a>
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('informatie')}}">Informatie</a>
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('overons')}}">Over Ons</a>
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('trainingen')}}">Trainingen</a>
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('webshop')}}">Webshop</a>
                <a href="#" class="navbar-item is-tab {{Nav::isRoute('spelendatabank')}}">Spelendatabank</a>
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
    </nav>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
            });
        }

        });
    </script>