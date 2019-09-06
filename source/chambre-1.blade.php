@extends('_layouts.master')

@section('body')
    <img src="/assets/images/room-1/hero.jpg" alt="Le Mundhome, chambre 1" class="img-fluid">

    <div class="content">
        <h1 class="page-title">La chambre 1</h1>
        <p>
            Située à l’étage, cette chambre lumineuse de 24 m<sup>2</sup> convient pour 1 à 3 personnes.
        </p>

        <p class="font-weight-bold">Prestations&nbsp;:</p>
        <ul class="bullets">
            <li>2 lits de 90x200 reliés, formant un grand lit de 180. Les lits peuvent aussi être séparés (dans ce cas, merci de le préciser avant votre arrivée).</li>
            <li>Une banquette-lit de 80x200 peut servir de lit d’appoint, plutôt destiné à un enfant ou ado.</li>
            <li>Une grande table ronde de 120 cm, un bureau et 3 chaises-fauteuils.</li>
            <li>La salle de bains est attenante, avec une grande douche à l’italienne.</li>
            <li>Le WC est attenant à la salle de bain mais séparé.</li>
        </ul>

        <p class="font-weight-bold">Tarifs&nbsp;:</p>
        <ul class="list-unstyled">
            <li>1 personne&nbsp;: 90&nbsp;€</li>
            <li>2 personnes&nbsp;: 100&nbsp;€</li>
            <li>3 personnes&nbsp;: 130&nbsp;€</li>
        </ul>

        <p>Le prix inclut le petit-déjeuner et la taxe de séjour (0,55 € par personne et par jour).</p>
        <p>
            La <a href="fidelite">carte de fidélité</a> est gratuite&nbsp;:
            elle vous donne droit à une cinquième nuit gratuite, même pour un séjour
            en plusieurs fois, soit une remise de 20% sur le prix de votre séjour.
        </p>

        <p class="font-weight-bold">Informations complémentaires&nbsp;:</p>

        <ul class="list-unstyled">
            <li>Wifi gratuit</li>
            <li>lit bébé sur simple demande</li>
            <li>animaux non admis</li>
        </ul>
    </div>

    <div class="ml-lg-5 pl-lg-5 pr-lg-5 mr-lg-5 mb-5">
        <div class="row m-auto">
            <div class="col-6 col-md-3 px-1 py-1">
                <a href="/assets/images/room-1/1.jpg">
                    <img src="/assets/images/room-1/1-thumb.jpg" alt="La chambre 1" class="img-fluid">
                </a>
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <a href="/assets/images/room-1/2.jpg">
                    <img src="/assets/images/room-1/2-thumb.jpg" alt="La chambre 1" class="img-fluid">
                </a>
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <a href="/assets/images/room-1/3.jpg">
                    <img src="/assets/images/room-1/3-thumb.jpg" alt="La chambre 1" class="img-fluid">
                </a>
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <a href="/assets/images/room-1/4.jpg">
                    <img src="/assets/images/room-1/4-thumb.jpg" alt="La chambre 1" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
@endsection
