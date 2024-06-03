<header class="d-flex align-item-center">
    <h1 class="text-center">Dashboard administrateur</h1>
    <div class="container-fluid">
        <p class="m-0">Bienvenue <?= $_SESSION['name']?></p>
        <p class="m-0">Votre identifiant : <?= $_SESSION['email']?></p>
        <p class="m-0">Votre rôle : <?= $_SESSION['role']?></p>
    </div>
    <div class="container-fluid">
        <a class="btn btn-danger" href="/logout">Déconnexion</a>
    </div>
</header>
