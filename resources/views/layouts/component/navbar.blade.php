<nav class="navbar navbar-light bg-secondary p-3">
    <div>
        <a class="navbar-brand text-info h1" href="#">{{$name}}</a>
    </div>
    <div class="d-flex">
        <a class="nav-link text-info" href="{{ route('home') }}">Home</a>
        @auth
            <a class="nav-link text-info" href="{{ route('articles') }}">Article index</a>
            <a class="nav-link text-info" href="{{ route('create') }}">Article create</a>
            <a class="nav-link text-info" href="{{ route('mine') }}">Mes Article</a>
            <a class="nav-link btn btn-danger" href="{{ route('logout') }}">Me déconnecter</a>
        @else
            <a class="nav-link text-info" href="{{ route('registration') }}">Mon compte</a>
            <a class="nav-link btn btn-danger" href="{{ route('login') }}">Connexion</a>
        @endauth
    </div>
</nav>