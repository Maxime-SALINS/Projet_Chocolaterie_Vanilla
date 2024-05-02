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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex">
        <div>
            <a class="navbar-brand" href="index.php">
                <img class="w-25" src="../../assets/images/logo/logo-chocolaterie.png" alt="logo-chocolaterie">
            </a>
        </div>
        <nav class="navbar navbar-expand-lg w-100">
            <div class="container-fluid">
                <div>
                    <div class="w-100">
                        <h1 class="text-uppercase text-center">Chocolaterie la rouvière</h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produits
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-uppercase" href="#">Chocolat</a></li>
                                    <li><a class="dropdown-item text-uppercase" href="#">Café & Thé</a></li>
                                    <li><a class="dropdown-item text-uppercase" href="#">Glace</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="#">Histoire</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse navbarSupportedContent">
                <a href="#" target="_blank">contact</a>
            </div>
        </nav>
    </header>