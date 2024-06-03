<header class="d-flex align-item-center justify-content-between bg-primary text-white">
    <div class="container text-center">
        <h1 class="my-3">Dashboard administrateur</h1>
    </div>
    <div class="d-flex align-item-center justify-content-end">
        <div class="container-fluid text-center">
            <p class="m-0">Bienvenue <?= $_SESSION['name'] ?> !</p>
        </div>
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
            <section class="col-12">
                <h3>Informations du profil</h3>
                <ul class="container-fluid">
                    <li>Prénom : <?= $_SESSION['name'] ?></li>
                    <li>Email : <?= $_SESSION['email'] ?></li>
                    <li>Rôle : <?= $_SESSION['role'] ?> </li>
                </ul>
            </section>
        </div>
    </section>
</main>