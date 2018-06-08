        <navbar class="navbar has-shadow">
            <div class="container">
                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
                <div class="navbar-menu" id="navMenu">
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
        </div>
        </navbar>

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