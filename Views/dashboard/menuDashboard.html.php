<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="navbar-brand navbar-brand-autodark">
            <a href="/dashboard">
                <img class="navbar-brand-image" src="../../assets/images/logo/logo-chocolaterie.png" alt="Logo chocolaterie rouvière">
            </a>
        </div>
        <div id="sidebar-menu" class="collapse navbar-collapse">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="nav-link-title">
                            Accueil dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/dashboard" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-file"></i> 
                        </span>
                        <span class="nav-link-title">
                            Gestion contenu
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <?php foreach ($elements as $element):?>
                                    <a class="dropdown-item" href="/dashboard/contenu/<?= $element['page_name']?>"><?= $element['page_name']?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/referencement">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-magnifying-glass-dollar"></i>
                        </span>
                        <span class="nav-link-title">
                            Référencement
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/produits">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-cookie"></i>
                        </span>
                        <span class="nav-link-title">
                            Gestion produits
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/newsletter">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="nav-link-title">
                            Gestion Newsletter
                        </span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/profil">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-title">
                            Profil utilisateur
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>