<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', env('APP_NAME'))</title>
        <link rel="stylesheet" href={{asset('assets/app.css')}}>
        <link rel="stylesheet" href={{asset('assets/normalize.css')}}>
        <link rel="stylesheet" href={{asset('assets/fontawesome.min.css')}}>
        <link rel="stylesheet" href={{asset('assets/bootstrap.min.css')}}>
        <script src={{asset('assets/bootstrap.bundle.min.js')}}></script>
    </head>
    <body >
        <header>
            @component('layouts.component.navbar')
                @slot('name')
                    Seconde Laravel App
                @endslot
            @endcomponent
        </header>
        <div class="container">
            <div class="row" id="pageContent">
                <div class="col-sm">
                    @section('left')
                        <div id="leftDiv" class="p-2">
                            <h1 class="text-info">Article management</h1>
                            <p>Is my seconde laravel App. As it name occured bellow,it talk about the management of your articles.</p>
                            <img src="{{ asset('assets/images/pdp.jpeg') }}" alt="Photo de profil" id="imagePdp">
                        </div>
                    @show
                </div>

                <div class="col-sm">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="d-flex text-info justify-content-center align-items-center bg-secondary h-20">
            <p class="m-0 ">&copy; Copyright {{date('Y')}} - RAZAFINDRASOLO Angilio</p>
            <p class="m-0 ">Dévelloper en laravel | Tout droit reservé.</p>    
        </footer>
    </body>
</html>
