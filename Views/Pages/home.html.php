<!---- Carousel n°1 ---->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $newPage->getImage(1);?>" class="d-block w-100" alt="<?= $newPage->getAlt(1); ?>">
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(2); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(2); ?>">
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(3); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(3); ?>">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!---- Section product ---->
<section class="container-fluid text-center my-5">
    <h2 class="titre-secondary text-uppercase my-4"><?= $newPage->getSecondTitle(1); ?></h2>
    <div class="row">
        <div class="col-12 col-md-4">
            <h3 class="titre-tertiary text-uppercase text-decoration-underline my-3"><?= $newPage->getThirdTitle(1); ?></h3>
            <img class="card-img-top rounded" src="<?= $newPage->getImage(4); ?>" alt="<?= $newPage->getAlt(4); ?>">
            <a class="btn btn-product text-white my-3" href="/produits">En savoir plus</a>
        </div>
        <div class="col-12 col-md-4">
            <h3 class="titre-tertiary text-uppercase text-decoration-underline my-3"><?= $newPage->getThirdTitle(2); ?></h3>
            <img class="card-img-top rounded" src="<?= $newPage->getImage(5); ?>" alt="<?= $newPage->getAlt(5); ?>">
            <a class="btn btn-product text-white my-3" href="/produits">En savoir plus</a>
        </div>
        <div class="col-12 col-md-4">
            <h3 class="titre-tertiary text-uppercase text-decoration-underline my-3"><?= $newPage->getThirdTitle(3); ?></h3>
            <img class="card-img-top rounded" src="<?= $newPage->getImage(6); ?>" alt="<?= $newPage->getAlt(6); ?>">
            <a class="btn btn-product text-white my-3" href="/produits">En savoir plus</a>
        </div>
    </div>
</section>

<!---- Carousel n°2 ---->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $newPage->getImage(7); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(7); ?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(8); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(8); ?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(9); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(9); ?>">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!---- Carousel n°3: avis google ---->
<section class="container-fluid">
    <h2 class="titre-secondary text-uppercase text-center"><?= $newPage->getSecondTitle(2); ?></h2>
</section>

<!---- Carousel n°3: avis google ---->
<section class="container-fluid">
    <h2 class="titre-secondary text-uppercase text-center"><?= $newPage->getSecondTitle(3); ?></h2>
</section>