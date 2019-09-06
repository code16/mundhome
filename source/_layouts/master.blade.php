<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
    @extends('_layouts.master')

        <div class="container mt-2">
            <div class="header text-center">
                <div class="logo h1">le Mundhome</div>
                <div class="baseline mt-2 mb-2">
                    <div class="font-weight-bold">Chambres d'hôtes</div>
                    <div><span class="font-weight-bold">de confort</span> à Mundolsheim</div>
                    <div>Eurométropole Strasbourg</div>
                </div>
            </div>

            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/maison">la maison</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/chambre-1">la chambre 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">la chambre 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">petit-déjeuner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">situation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">carte de fidélité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">nous contacter</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            @yield('body')

        </div>

        <footer class="pt-5 pb-5">
            <div class="container">
                <div>
                    <p class="font-weight-bold mt-4 mb-3">Contact</p>
                    <p>Michel Lonchampt<br>06 60 10 96 24<br><a href="mailto:info@lemundhome.fr">info@lemundhome.fr</a></p>
                </div>
                <div>
                    <p class="font-weight-bold mt-4 mb-3">Accès</p>
                    <p>14 rue du général de Gaulle<br>67450 Mundolsheim<br><a href="https://goo.gl/maps/5ho8BiQZVrb3YTjP7" target="_blank">Afficher sur Google Maps</a></p>
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
