<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield("title") Le Mundhome, Chambres d’hôtes à Mundolsheim</title>
        <meta name="description" content="Chambres d’hôtes de confort à Mundolsheim, Eurométropole de Strasbourg (Alsace / Grand Est, France)">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
        <link rel="manifest" href="/assets/site.webmanifest">
    </head>
    <body>
        <div class="container mt-4" id="app">
            <a class="header text-center" href="/">
                <div class="text-hide logo">le Mundhome</div>
                <div class="baseline mt-4 mb-4">
                    <span class="font-weight-bold">Chambres d'hôtes</span>
                    <br><span class="font-weight-bold">de confort</span> à Mundolsheim
                    <br>Eurométropole Strasbourg
                </div>
            </a>

            <div class="menu mb-3 mt-3 text-center">
                <a href="/maison" class="{{ $page->selected('maison') }}">
                    <span class="d-none d-sm-inline-block">la</span>
                    <span>maison</span>
                </a>
                <a href="/chambre-1" class="{{ $page->selected('chambre-1') }}">
                    <span class="d-none d-sm-inline-block">la</span>
                    <span>chambre 1</span>
                </a>
                <a href="/chambre-2" class="{{ $page->selected('chambre-2') }}">
                    <span class="d-none d-sm-inline-block">la</span>
                    <span>chambre 2</span>
                </a>
                <a href="/petit-dejeuner" class="{{ $page->selected('petit-dejeuner') }}">
                    petit-déjeuner
                </a>
                <a href="/situation" class="{{ $page->selected('situation') }}">
                    situation
                </a>
                <a href="/fidelite" class="d-none d-sm-inline-block {{ $page->selected('fidelite') }}">
                    carte de fidélité
                </a>
                <a href="/contact" class="{{ $page->selected('contact') }}">
                    <span class="d-none d-sm-inline-block">nous contacter</span>
                    <span class="d-sm-none">contact</span>
                </a>
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
