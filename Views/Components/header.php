<header>
    <div class="d-flex navbar justify-content-beetween py-0">
        <a class="navbar-brand" href="/">
            <img class="mx-2 my-1 img-fluid" src="../../assets/images/logo/logo-chocolaterie.png" alt="logo-chocolaterie">
        </a>
        <section class="text-center">
            <h1 class="titre_principal text-uppercase my-3"><?= !empty($newPage->getFirstTitle()) ? $newPage->getFirstTitle() : $title; ?></h1>
            <nav class="navbar navbar-expand-lg d-none d-lg-block p-0">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-5">
                                <a class="nav-link nav-link-ltr text-uppercase" aria-current="page" href="/">Accueil</a>
                            </li>
                            <li class="nav-item dropdown mx-5">
                                <a class="nav-link nav-link-ltr text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produits
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="lien-drop dropdown-item text-uppercase" href="produits">Chocolat</a></li>
                                    <li><a class="lien-drop dropdown-item text-uppercase" href="404">Café & Thé</a></li>
                                    <li><a class="lien-drop dropdown-item text-uppercase" href="404">Glace</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link nav-link-ltr text-uppercase" href="histoire">Histoire</a>
                            </li>
                            <li class="nav-item mx-5 d-block d-lg-none d-xl-none">
                                <a class="contact-responsive nav-link-ltr text-uppercase text-decoration-none" href="contact">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <div class="header-contact rounded-bottom-1 nav-item mx-4 px-4 pb-1 d-none d-md-none d-lg-block d-xl-block">
            <a class="lien-contact text-decoration-none text-center" href="contact" target="_blank">
                contact
            </a>
        </div>
        <button class="navbar-toggler d-lg-none d-xl-none mx-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="container-fluid">
        <nav class="navbar text-center d-block d-lg-done">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li class="nav-item dropdown mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produits
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="lien-drop dropdown-item text-uppercase" href="produits">Chocolat</a></li>
                                <li><a class="lien-drop dropdown-item text-uppercase" href="404">Café & Thé</a></li>
                                <li><a class="lien-drop dropdown-item text-uppercase" href="404">Glace</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link nav-link-ltr text-uppercase" href="histoire">Histoire</a>
                        </li>
                        <li class="nav-item mx-5 d-block d-lg-none d-xl-none">
                            <a class="contact-responsive nav-link-ltr text-uppercase text-decoration-none" href="contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>