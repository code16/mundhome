@extends('_layouts.master')

@section('body')
    <img src="/assets/images/breakfast/hero.jpg" alt="Le Mundhome, petit-déjeuner" class="img-fluid">

    <div class="content">
        <h1 class="page-title">Le petit-déjeuner</h1>
        <p>
            Servi de 8h à 10h (sauf demande spéciale), vous prendrez votre petit-déjeuner
            dans la plus belle pièce de la maison.
        </p>

        <p>
            Le buffet vous propose croissants et pain frais, oranges pressées, fromages
            et produits laitiers, fruits secs, accompagnant café, thés, chocolat.
        </p>

        <p>
            À toute heure, vous pourrez vous préparer une boisson, thé, expresso,
            ou utiliser la TV ou le billard.
        </p>

        <p>
            Le grand balcon donnant sur le jardin est accessible aux fumeurs.
        </p>
    </div>

    <div class="ml-lg-5 pl-lg-5 pr-lg-5 mr-lg-5 mb-5">
        <div class="row m-auto">
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/breakfast/1.jpg'}" src="/assets/images/breakfast/1-thumb.jpg" alt="La salle de petit-déjeuner" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/breakfast/2.jpg'}" src="/assets/images/breakfast/2-thumb.jpg" alt="La salle de petit-déjeuner" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/breakfast/3.jpg'}" src="/assets/images/breakfast/3-thumb.jpg" alt="La salle de petit-déjeuner" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 px-1 py-1">
                <img v-img:group="{src:'/assets/images/breakfast/4.jpg'}" src="/assets/images/breakfast/4-thumb.jpg" alt="La salle de petit-déjeuner : balcon" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
