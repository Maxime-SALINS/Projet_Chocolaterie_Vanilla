<aside class="col-2 text-center bg-primary-subtle p-3">
    <h2 class="text-uppercase text-decoration-underline fs-5">panel administrateur</h2>
    <div class="container-fluid">
        <ul class="nav flex-column">
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard">
                    <i class="bi bi-house"></i>
                    Accueil dashboard
                </a>
            </li>
            <li class="nav-item dropdown my-2">
                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-file-post"></i>
                    Gestion contenu
                </a>
                <ul class="dropdown-menu">
                    <?php foreach ($elements as $element):?>
                        <li><a class="dropdown-item text-center" href="/dashboard/contenu/?page_name=<?= $element['page_name']?>"><?= $element['page_name']?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/referencement">
                    <i class="bi bi-search-heart"></i>
                    Référencement
                </a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/produits">
                    <i class="bi bi-cookie"></i>
                    Gestion produits
                </a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/statistique">
                    <i class="bi bi-graph-up"></i>
                    Statistique du site
                </a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/newsletter">
                    <i class="bi bi-newspaper"></i>
                    Gestion Newsletter
                </a>
            </li>
            <hr>
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/profil">
                    <i class="bi bi-person-fill-gear"></i>
                    Profil admin
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
        <a class="btn btn-danger my-3" href="/logout">Déconnexion</a>
    </div>
</aside>