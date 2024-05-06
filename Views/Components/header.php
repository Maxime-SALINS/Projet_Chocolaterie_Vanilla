<?php
$title_default = 'Page | Chocolaterie';
$title = 'Page | Accueil';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La chocolaterie la rouvière propose une multitude de produits autour du chocolat">
    <link rel="shortcut icon" href="../../assets/images/favicon/logo-chocolaterie.ico" type="image/x-icon">
    <title><?= !empty($title) ? $title : $title_default ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex flex-column align-items-center position relative">
        <div class="position-absolute top-0 start-0">
            <a class="navbar-brand" href="index.php">
                <img class="w-25 mx-2 my-1 img-fluid" src="../../assets/images/logo/logo-chocolaterie.png" alt="logo-chocolaterie">
            </a>
        </div>
        <h1 class="titre_principal text-uppercase text-center my-3">Chocolaterie la rouvière</h1>
        <nav class="p-0 w-100 navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produits
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="lien-drop dropdown-item text-uppercase" href="#">Chocolat</a></li>
                                <li><a class="lien-drop dropdown-item text-uppercase" href="#">Café & Thé</a></li>
                                <li><a class="lien-drop dropdown-item text-uppercase" href="#">Glace</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase" href="#">Histoire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="rounded-bottom-1 div-contact mx-2 px-4 pb-1 position-absolute top-0 end-0">
            <a class="lien-contact text-decoration-none text-center" href="#" target="_blank">contact</a>
        </div>
    </header>