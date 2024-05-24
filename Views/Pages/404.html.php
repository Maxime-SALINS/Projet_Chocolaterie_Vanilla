<?php

$title_default = 'Page | Chocolaterie';
$title = 'Page | Erreur 404';
$first_title = 'erreur 404';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Components/header.php';

?>

<div class="container text-center my-5">
    <p class="fs-1">
        La page que vous avez demandé est introuvable. Veuillez revenir sur l'accueil
    </p>
    <div class="d-flex justify-content-center">
        <a class="btn btn-footer text-white text-uppercase px-3 py-2 my-3" href="/index.php">accueil</a>
    </div>
</div>


<?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Components/footer.php'; ?>