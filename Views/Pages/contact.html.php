<?php

$title_default = 'Page | Chocolaterie';
$title = 'Page | Contact';
$first_title = 'contact';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Components/header.php';

?>
<div class="row my-5">
    <div class="col-12 col-lg-5">
        <section class="container">
            <h2 class="titre-secondary text-uppercase text-center text-decoration-underline my-4">informations boutique</h2>
            <div class="container text-center">
                <h3 class="titre-tertiary fs-5">Horraire d'ouverture :</h3>
                <ul class="list-unstyled">
                    <li>Lundi : 8h-12h et 14h-18h</li>
                    <li>Mardi : 8h-12h et 14h-18h</li>
                    <li>Mercredi : 8h-12h et 14h-18h</li>
                    <li>Jeudi : 8h-12h et 14h-18h</li>
                    <li>Vendredi : 8h-12h et 14h-18h</li>
                    <li>Samedi : 8h-12h</li>
                    <li>Dimanche : fermé</li>
                </ul>
            </div>
            <div class="container text-center">
                <h3 class="titre-tertiary fs-5">Adresse :</h3>
                <p class="fs-6">83 bld du redon 13009 marseille</p>
            </div>
            <div class="container text-center">
                <h3 class="titre-tertiary fs-5">Email :</h3>
                <p class="fs-6">chocolaterie.larouviere@gmail.com</p>
            </div>
            <div class="container text-center">
                <h3 class="titre-tertiary fs-5">N° téléphone :</h3>
                <p class="fs-6">06 - 29 - 88 - 26 - 23</p>
            </div>
        </section>
        <section class="container">
            <h2 class="titre-secondary text-uppercase text-center text-decoration-underline my-4">plan de la boutique</h2>
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.9203840856026!2d5.420458176451651!3d43.253090378216385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9b966bac20d29%3A0x33fb82de74e272a7!2sChocolaterie%20La%20Rouvi%C3%A8re!5e0!3m2!1sfr!2sfr!4v1716556640252!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
    <section class="col-12 col-lg-6">
        <h2 class="titre-secondary text-uppercase text-center my-4">contactez nous !</h2>
        <div class="container">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="mt-1 col-12 col-lg-8">
                        <input class="p-3 col-12 form-control bg-secondary-subtle" id="name" type="text" placeholder="NOM" aria-label="nom">
                    </div>
                    <div class="mt-1 col-12 col-lg-4">
                        <input class="p-3 col-12 form-control bg-secondary-subtle" id="firstname" type="text" placeholder="PRENOM" aria-label="prénom">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="mt-1 col-12 col-lg-4">
                        <input class="p-3 col-12 form-control bg-secondary-subtle" id="email" type="email" placeholder="EMAIL">
                    </div>
                    <div class="mt-1 col-12 col-lg-8">
                        <input class="p-3 col-12 form-control bg-secondary-subtle" id="phone" type="tel" placeholder="TELEPHONE">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <input class="p-3 col-12 form-control bg-secondary-subtle" id="sujet" type="text" placeholder="SUJET">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <textarea class="h-textarea p-3 col-12 form-control bg-secondary-subtle" id="message" placeholder="MESSAGE"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-footer text-light px-4 py-2">ENVOYER</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Components/footer.php'; ?>