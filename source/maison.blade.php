@extends('_layouts.master')

@section("title", "La maison | ")

@section('body')
    <img src="/assets/images/house/hero.jpg" alt="Le Mundhome, la maison" class="img-fluid">

    <div class="content">
        <h1 class="page-title">La maison</h1>
        <p>
            La maison est une ancienne ferme, construite en 1824, ou plutôt reconstruite
            suite à l’incendie du village en 1815, lors de la bataille de la Souffel.
            <br><span class="small">
                La bataille de la Souffel, durant les Cent-Jours, oppose l’armée du Rhin du général Rapp,
                10 jours après Waterloo, aux austro-allemands du prince de Wurtemberg.
            </span>
        </p>
    </div>

    <div class="text-center mt-5 mb-5">
        <img src="/assets/images/house/old.jpg" alt="Le Mundhome" class="img-fluid">
    </div>

    <div class="content">
        <p>
            Il s’agit d’une grande bâtisse, située sur la rue principale,
            ouverte sur un grand jardin au bout duquel coule la rivière Souffel.
        </p>
        <p>
            Jusqu’en 1990, le rez-de-chaussée abritait la Pharmacie de Mundolsheim,
            qui a ensuite déménagé.
        </p>
    </div>

    <div class="text-center mt-5 mb-5">
        <img src="/assets/images/house/pharmacy.jpg" alt="L'ancienne pharmacie" class="img-fluid">
    </div>

    <div class="content">
        <p>
            Dans cette maison familiale, le propriétaire a aménagé 2 hébergements confortables&nbsp;:
            une chambre et une suite.
        </p>

        <p>
            Depuis la cour, on accède aux chambres par un escalier indépendant réservé aux hôtes.
        </p>

        <p>
            La maison est composée de deux corps de bâtiments, reliés en étage par la
            grande salle des petits-déjeuners.
            <br>Les chambres sont situées dans l’un des corps, le propriétaire
            assure ainsi une présence discrète, tout en restant attentif à vos demandes.
        </p>

        <h2 class="page-title">Le jardin</h2>
    </div>

    <div class="ml-lg-5 pl-lg-5 pr-lg-5 mr-lg-5 mb-5 mt-5">
        <div class="row m-auto">
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/house/garden/1.jpg'}" src="/assets/images/house/garden/1-thumb.jpg" alt="Le jardin du Mundhome" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/house/garden/2.jpg'}" src="/assets/images/house/garden/2-thumb.jpg" alt="Le jardin du Mundhome" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/house/garden/3.jpg'}" src="/assets/images/house/garden/3-thumb.jpg" alt="Le jardin du Mundhome" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/house/garden/4.jpg'}" src="/assets/images/house/garden/4-thumb.jpg" alt="Le jardin du Mundhome" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="content">
        <p>
            Dans l’axe de la maison s’étend le jardin, tout en longueur.
            <br>L’usage du jardin est réservé à la famille du propriétaire&nbsp;;
            cependant, celui-ci se fera un plaisir de vous le faire découvrir.
        </p>
        <p>
            Après la cour dominée par un cèdre majestueux, le jardin se structure autour
            d’une allée de rosiers grimpants Ronsard en arceaux.
            <br>Dans une surface relativement modeste (2400 m<sup>2</sup>) , on y trouve tout à la fois
            une pelouse, un potager, un verger, un parc d’arbres centenaires,
            un bassin (en construction), les berges d’une rivière, un portique de jeux d’enfants
            et une petite piscine. Des animaux y vivent, poules, poissons, abeilles
            (qui produisent le «&nbsp;miel du Mundhome&nbsp;»).
        </p>

        <h2 class="page-title">Les alentours</h2>
    </div>

    <div class="text-center mt-5 mb-5">
        <img src="/assets/images/house/around.jpg" alt="Les alentours" class="img-fluid">
    </div>

    <div class="content">
        <p>
            Vous pourrez flâner dans les rues calmes du village,
            monter jusqu’à l’église protestante (site classé),
            visible depuis la chambre 1.
        </p>
        <p>
            De là, vous accédez au Fort Ducrot, au bord de la Piste des Forts,
            pour des balades à pied, en footing ou en vélo (voyez avec le
            propriétaire pour un prêt de vélo).
        </p>
    </div>
@endsection
