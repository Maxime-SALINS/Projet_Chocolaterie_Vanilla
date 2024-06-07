<header class="d-flex align-item-center justify-content-between bg-primary text-white">
    <div class="container text-center">
        <h1 class="my-3"><?= $first_title ?></h1>
    </div>
    <div class="d-flex align-item-center justify-content-center">
        <p class="mx-2">Bienvenue <?= $_SESSION['name'] ?> !</p>
    </div>
</header>
<main class="row">
    <aside class="col-2 text-center bg-primary-subtle p-3">
        <h2 class="text-uppercase text-decoration-underline fs-5">panel administrateur</h2>
        <div class="container-fluid">
            <ul class="nav flex-column">
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-person-fill-gear"></i>
                        Profil administrateur
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-graph-up"></i>
                        Statistique du site
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-search-heart"></i>
                        Référencement (SEO)
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-cookie"></i>
                        Gestion produits
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-file-post"></i>
                        Gestion contenu
                    </a>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <i class="bi bi-newspaper"></i>
                        Gestion Newsletter
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <a class="btn btn-danger my-3" href="/logout">Déconnexion</a>
        </div>
    </aside>
    <section class="col-10 bg-body-secondary p-3">
        <h2 class="text-uppercase text-center">Profil</h2>
        <div class="row">
            <section class="col-4 card mx-auto">
                <h3 class="text-center my-3">Informations du profil</h3>
                <ul class="container-fluid">
                    <li class="list-group-item my-2">Prénom : <?= $_SESSION['name'] ?></li>
                    <li class="list-group-item my-2">Email : <?= $_SESSION['email'] ?></li>
                    <li class="list-group-item my-2">Rôle : <?= $_SESSION['role'] ?> </li>
                </ul>
            </section>
            <section class="col-4 card mx-auto text-center">
                <h3 class="text-center my-3">Modification du profil</h3>
                <form action="" method="post">
                    <div class="container my-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="FormControlInputEmail" class="form-label mx-5">Prénom</label>
                            <button class="btn btn-success" type="button" id="btn-name">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </div>
                        <input class="form-control d-none my-2" type="text" name="username" id="username" placeholder="Entrez votre prénom">
                    </div>
                    <div class="container my-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="FormControlInputEmail" class="form-label mx-5">Email</label>
                            <button class="btn btn-success" type="button" id="btn-email">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </div>
                        <input class="form-control d-none my-2" type="email" name="email" id="email" placeholder="Entrez votre nouvel email">
                    </div>
                    <div class="container my-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="FormControlInputpassword" class="form-label mx-5">Mot de passe</label>
                            <button class="btn btn-success" type="button" id="btn-password">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </div>
                        <input class="form-control d-none my-2" type="password" name="password" id="password" placeholder="Entrez votre nouveau mot de passe">
                    </div>
                    <div class="container my-3">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </section>
        </div>
    </section>
</main>