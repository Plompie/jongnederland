<div id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            Algemeen
        </p>
        <ul class="menu-list">
            <li><a href="{{route('beheer.dashboard')}}" class="{{Nav::isRoute('beheer.dashboard')}}">Dashboard</a></li>
        </ul>
        <p class="menu-label">
            Administratie
        </p>
        <ul class="menu-list">
            <li><a href="{{route('gebruikers.index')}}" class="{{ Nav::isResource('gebruikers') }}">Beheer gebruikers</a></li>
        </ul>
        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li><a href="{{route('artikels.index')}}" class="{{ Nav::isResource('artikels', 2) }}">Beheer artikels</a></li>
        </ul>
    </aside>
</div>