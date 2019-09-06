@extends('_layouts.master')

@section('body')
    <img src="/assets/images/home/hero.jpg" alt="Le Mundhome" class="img-fluid">

    <div class="content">
        <h1 class="page-title">Bienvenue</h1>

        <p>
            Le Mundhome vous accueille à Mundolsheim, prononcer [mundols(h)aim] commune de la couronne de Strasbourg.
            Proche du centre-ville (8 km), Mundolsheim, 5000 habitants environ, fait partie de l’EMS (Eurométropole de Strasbourg).
        </p>
        <p>
            De son ancienne vocation agricole, la commune a conservé de grandes fermes de style alsacien, regroupées dans le vieux village.
        </p>

        <h2 class="page-title">C’est là que vous pourrez séjourner&nbsp;:</h2>
    </div>

    <div class="ml-lg-5 pl-lg-5 pr-lg-5 mr-lg-5 mb-5">
        <div class="row m-auto">
            <div class="col-6 col-md-3 px-1 py-1">
                <img src="/assets/images/home/room1.jpg" alt="La chambre 1" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img src="/assets/images/home/room2.jpg" alt="La chambre 2" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img src="/assets/images/home/room3.jpg" alt="La chambre 1 : salle de bains" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img src="/assets/images/home/room4.jpg" alt="La chambre 1" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="content">
        <p>
            Que vous voyagiez pour le travail, pour le tourisme, en famille, en amoureux,
            ou tout simplement pour faire étape,
            la maison d’hôtes Le Mundhome vous apporte confort, distinction, et sens pratique.
        </p>

        <ul class="list-unstyled">
            <li>Les <strong>chambres à grands espaces</strong>, avec bureau et tables de travail, une literie de grande qualité.</li>
            <li>Les <strong>sanitaires privatifs</strong>, avec grande douche à l’italienne et WC séparés.</li>
            <li>Le <strong>petit-déjeuner</strong> king-size, pris dans le grand séjour surplombant le jardin.</li>
            <li>L’<strong>entrée indépendante</strong> des chambres, un propriétaire discret mais attentif à vos demandes.</li>
            <li>Le charme d’une <strong>maison ancienne</strong>, ferme alsacienne à colombages, dans un environnement de village proche de la grande ville.</li>
            <li>Les <strong>transports en commun</strong> à proximité immédiate (*).</li>
        </ul>

        <ul class="list-unstyled">
            <li>les séjours d’<strong>une seule nuit</strong> sont acceptés,</li>
            <li>la réservation se fait <strong>sans versement d’acompte</strong>, en confiance,</li>
            <li>le <strong>paiement par carte</strong> est accepté,</li>
            <li>la <a href="" class="font-weight-bold">carte de fidélité</a> vous fait bénéficier d’une réduction de 20%.</li>
        </ul>

        <div class="small mt-5">
            <p>
                (*) L’arrêt de bus est à 50 mètres, le bus 73 ou 75 rejoint le centre-ville
                en 20 minutes (un bus toutes les 30 mn). La gare Sncf est à 15 minutes à pied,
                le TER rejoint la gare de Strasbourg en 7 minutes (24 trains par jour, soit un
                train toutes les demi-heures puis toutes les heures).
            </p>
        </div>
    </div>
@endsection
