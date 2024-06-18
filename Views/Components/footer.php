<footer class="footer-style container-fluid p-2">
    <div class="row my-3">
        <h2 class="titre-footer text-center">Abonnez vous à la Newsletter</h2>
        <form class="row container-fluid text-center" action="" method="post">
            <div class="col-auto my-1">
                <input class="form-control" type="email" name="useremail_news" id="useremail_news" placeholder="Entrez votre email">
                <?php if (!empty($msg_success)) : ?>
                    <div class="alert alert-success">
                        <?= $msg_success ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($msg_error)) : ?>
                    <div class="alert alert-danger">
                        <?= $msg_error ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($error)) : ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-auto text-start my-1">
                <button class="btn btn-footer text-white" type="submit">Envoyer</button>
                <img src="../../assets/images/logo/Image-newsletter.png" alt="logo enveloppe-lettre">
            </div>
        </form>
    </div>
    <div class="row my-5 mx-5">
        <div class="col-12 col-md-4 mb-3">
            <section class="container-fluid text-center">
                <h3 class="titre-footer text-uppercase text-decoration-underline"">Sommaire</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="lien-footer nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="lien-footer nav-link" href="/produits">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="lien-footer nav-link" href="/histoire">Histoire</a>
                    </li>
                    </ul>
            </section>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <section class="container-fluid text-center">
                <h3 class="titre-footer text-uppercase text-decoration-underline"">Infomations</h3>
                    <ul class=" nav flex-column">
                    <li>
                        <a class="lien-footer nav-link" href="#">Mention légales</a>
                    </li>
                    <li>
                        <a class="lien-footer nav-link" href="#">Cookies</a>
                    </li>
                    </ul>
                    <h4 class="titre-footer">Horaires de la boutique :</h4>
                    <ul class="list-unstyled">
                        <li class="lien-footer">Lundi au vendredi : 8h à 18h</li>
                        <li class="lien-footer">Samedi : 8h à 14h</li>
                        <li class="lien-footer">Dimanche : fermé</li>
                    </ul>
            </section>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <section class="container-fluid text-center">
                <h3 class="titre-footer text-uppercase text-decoration-underline">Contact</h3>
                <div class="container-fluid mb-3">
                    <p class="lien-footer">N° de téléphone: 06 29 88 26 23</p>
                    <p class="lien-footer">Email: chocolaterie.larouviere@gmail.com</p>
                    <a class="lien-footer" href="/contact" target="_blank" rel="noopener noreferrer">Contactez-nous !</a>
                </div>
                <section class="container-fluid">
                    <h4 class="titre-footer">Nos réseaux:</h4>
                    <div class="d-flex justify-content-around my-3">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-instagram fa-2xl" style="color: #000000;"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-facebook fa-2xl" style="color: #000000;"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-linkedin fa-2xl" style="color: #000000;"></i>
                        </a>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <div class="container-fluid text-center">
        <p class="">Chocolaterie la rouvière - Copyright © 2024 - Tous droits réservés</p>
    </div>
</footer>