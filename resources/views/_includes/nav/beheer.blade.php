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
            <li><a href="{{route('users.index')}}" class="{{ Nav::isResource('users') }}">Beheer gebruikers</a></li>
        </ul>
        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li><a href="{{route('posts.index')}}" class="{{ Nav::isResource('posts', 2) }}">Blog artikels</a></li>
        </ul>
    </aside>
</div>