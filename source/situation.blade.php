@extends('_layouts.master')

@section("title", "La situation | ")

@section('body')
    <img src="/assets/images/tourism/hero.jpg" alt="Le Mundhome, tourisme et activités" class="img-fluid">

    <div class="content">
        <h1 class="page-title">Aux portes de Strasbourg</h1>

        <p>
            Si vous êtes en voiture, Mundolsheim est idéalement placé à proximité
            des zones d’activités du nord de Strasbourg, et à quelques minutes du centre-ville
            par voie rapide.
        </p>

        <p>
            Sans voiture, Mundolsheim est très bien desservi par le bus et le train:
            <br>L’arrêt de bus est à 50 mètres, le bus 73 ou 75 rejoint le centre-ville en 20 minutes (un bus toutes les 30 minutes).
            <br>La gare Sncf est à 15 minutes à pied, le TER rejoint la gare de Strasbourg en 7 minutes (24 trains par jour, soit un train toutes les demi-heures puis toutes les heures).
        </p>

        <h2 class="page-title">Activités à proximité&nbsp;:</h2>

        <p>Le Mundhome est au cœur d’une région touristique où les activités sont nombreuses&nbsp;:</p>

        <div class="row">
            <div class="col-md-6">

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/strasbourg.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Strasbourg centre</div>
                        <div>
                            Les quartiers anciens, la cathédrale, la Petite France, la Neustadt, le Parlement européen…., sont accessibles sans voiture: par le bus, ou le train, ou par le parking relais très pratique.
                            <a href="https://www.visitstrasbourg.fr">Site de l’office de tourisme</a>.
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/alsace.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">La plaine d’Alsace</div>
                        <div>
                            Le vignoble et la Route du Vin, les ballons des Vosges,
                            la Forêt noire coté allemand, tout à portée d’excursions journalières.
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/europapark.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Europa park</div>
                        <div>
                            Le parc d’attraction n°1 mondial, à 40 km, avec un service de bus.
                            <a href="https://www.europapark.de/fr">Site internet</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/bike.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Pistes cyclables</div>
                        <div>
                            Mundolsheim est en plein sur la piste des forts&nbsp;: 80 km autour de Strasbourg et Kehl.
                            <a href="https://www.strasbourg.eu/decouvrir-la-piste-des-forts">Site internet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/events.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Les événements annuels</div>
                        <div><a href="https://noel.strasbourg.eu/">le marché de Noël</a></div>
                        <div><a href="https://festivalmusica.fr/">le festival musica</a></div>
                        <div><a href="https://www.strasbourg-monamour.eu/ ">strasbourg mon amour</a></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/caracalla.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Les thermes de Caracalla</div>
                        <div>
                            À Baden-baden, 4000 m² de thermes.
                            <a href="https://www.carasana.de/fr/">Site internet</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/museums.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Les musées d’art moderne</div>
                        <div>
                            Notamment à Baden-baden (<a href="https://www.museum-frieder-burda.de/fr/">Musée Frieder Burda</a>),
                            Bâle (<a href="https://www.fondationbeyeler.ch/fr/">Fondation Beyeler</a>),
                            Karlsruhe (<a href="https://www.kunsthalle-karlsruhe.de/fr/">Kunsthalle</a>),
                            Erstein (<a href="https://www.musee-wurth.fr/">Musée Wurth</a>),
                            Strasbourg (<a href="https://www.musees.strasbourg.eu/musee-d-art-moderne-et-contemporain">Mamcs</a>)
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/kirrwiller.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Cabaret à Kirrwiller</div>
                        <div>
                            Le Royal-Palace, un des 3 premiers music-halls de France.
                            <a href="https://royal-palace.com/">Site internet</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3 col-sm-2 col-md-3">
                        <img src="/assets/images/tourism/resto.jpg" width="80" class="img-fluid thumbnail">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9">
                        <div class="font-weight-bold">Restaurants à proximité</div>
                        <div>
                            <a href="https://www.steinmuehl.com">Steinmuhle</a> (à 1km), Boudoir de Ly (100m).
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
