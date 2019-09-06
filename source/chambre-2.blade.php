@extends('_layouts.master')

@section("title", "La chambre 2 | ")

@section('body')
    <img src="/assets/images/room-2/hero.jpg" alt="Le Mundhome, chambre 2" class="img-fluid">

    <div class="content">
        <h1 class="page-title">La chambre 2</h1>
        <p>
            Située au 2eme étage, cette suite de 50 m<sup>2</sup> convient pour 1 à 4 personnes&nbsp;;
            elle se compose de 2 pièces, en partie mansardées, plus une salle de bains et un WC.
        </p>

        <p class="font-weight-bold">Prestations&nbsp;:</p>
        <p>Dans la première pièce</p>
        <ul class="bullets">
            <li>un canapé-lit de 160x200</li>
            <li>une table de 150 et 4 chaises</li>
            <li>la salle de bains est attenante, avec une grande douche à l’italienne</li>
            <li>le WC est attenant</li>
        </ul>

        <p>Dans la seconde pièce</p>
        <ul class="bullets">
            <li>un grand lit de 160x200</li>
            <li>une armoire alsacienne et fauteuils</li>
        </ul>

        <p class="font-weight-bold">Tarifs&nbsp;:</p>
        <ul class="list-unstyled">
            <li>1 personne&nbsp;: 90&nbsp;€</li>
            <li>2 personnes&nbsp;: 100&nbsp;€</li>
            <li>3 personnes&nbsp;: 130&nbsp;€</li>
            <li>4 personnes&nbsp;: 140&nbsp;€</li>
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
                <img v-img:group="{src:'/assets/images/room-2/1.jpg'}" src="/assets/images/room-2/1-thumb.jpg" alt="La chambre 2" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/room-2/2.jpg'}" src="/assets/images/room-2/2-thumb.jpg" alt="La chambre 2" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/room-2/3.jpg'}" src="/assets/images/room-2/3-thumb.jpg" alt="La chambre 2 : sale de bains" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/room-2/4.jpg'}" src="/assets/images/room-2/4-thumb.jpg" alt="La chambre 2 : salon" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
