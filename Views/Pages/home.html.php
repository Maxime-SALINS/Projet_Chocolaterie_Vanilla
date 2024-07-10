<!---- Carousel n°1 ---->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $newPage->getImage(1); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(1); ?>">
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
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(8); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(8); ?>">
    </div>
    <div class="carousel-item">
      <img src="<?= $newPage->getImage(9); ?>" class="d-block w-100" alt="<?= $newPage->getAlt(9); ?>">
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
<section class="container-fluid my-2">
  <h2 class="titre-secondary text-uppercase text-center my-3"><?= $newPage->getSecondTitle(2); ?></h2>
  <div class="carousel-container">
    <div class="carousel">
      <div class="carousel-card">
        <div class="container">
          <div class="d-flex align-items-center justify-content-evenly">
            <div class="w-25 my-2">
              <img class="img-fluid rounded-circle border border-black" src="../../assets/images/logo/default-img.png" alt="img">
            </div>
            <h4 class="card-title">Maxime SALINS</h4>
          </div>
          <div class="container my-3">
            <p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat distinctio veniam, explicabo, natus debitis excepturi officia, omnis praesentium corporis quisquam voluptas dolorem cumque possimus assumenda eligendi aliquam! Porro, molestiae!</p>
          </div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <p class="mx-1">5/5</p>
          </div>
        </div>
      </div>
      <div class="carousel-card">
        <div class="container">
          <div class="d-flex align-items-center justify-content-evenly">
            <div class="w-25 my-2">
              <img class="img-fluid rounded-circle border border-black" src="../../assets/images/logo/default-img.png" alt="img">
            </div>
            <h4 class="card-title">Maxime SALINS</h4>
          </div>
          <div class="container my-3">
            <p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat distinctio veniam, explicabo, natus debitis excepturi officia, omnis praesentium corporis quisquam voluptas dolorem cumque possimus assumenda eligendi aliquam! Porro, molestiae!</p>
          </div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <p class="mx-1">5/5</p>
          </div>
        </div>
      </div>
      <div class="carousel-card">
        <div class="container">
          <div class="d-flex align-items-center justify-content-evenly">
            <div class="w-25 my-2">
              <img class="img-fluid rounded-circle border border-black" src="../../assets/images/logo/default-img.png" alt="img">
            </div>
            <h4 class="card-title">Maxime SALINS</h4>
          </div>
          <div class="container my-3">
            <p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat distinctio veniam, explicabo, natus debitis excepturi officia, omnis praesentium corporis quisquam voluptas dolorem cumque possimus assumenda eligendi aliquam! Porro, molestiae!</p>
          </div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <p class="mx-1">5/5</p>
          </div>
        </div>
      </div>
      <div class="carousel-card">
        <div class="container">
          <div class="d-flex align-items-center justify-content-evenly">
            <div class="w-25 my-2">
              <img class="img-fluid rounded-circle border border-black" src="../../assets/images/logo/default-img.png" alt="img">
            </div>
            <h4 class="card-title">Maxime SALINS</h4>
          </div>
          <div class="container my-3">
            <p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat distinctio veniam, explicabo, natus debitis excepturi officia, omnis praesentium corporis quisquam voluptas dolorem cumque possimus assumenda eligendi aliquam! Porro, molestiae!</p>
          </div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <p class="mx-1">5/5</p>
          </div>
        </div>
      </div>
      <div class="carousel-card">
        <div class="container">
          <div class="d-flex align-items-center justify-content-evenly">
            <div class="w-25 my-2">
              <img class="img-fluid rounded-circle border border-black" src="../../assets/images/logo/default-img.png" alt="img">
            </div>
            <h4 class="card-title">Maxime SALINS</h4>
          </div>
          <div class="container my-3">
            <p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quaerat distinctio veniam, explicabo, natus debitis excepturi officia, omnis praesentium corporis quisquam voluptas dolorem cumque possimus assumenda eligendi aliquam! Porro, molestiae!</p>
          </div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <p class="mx-1">5/5</p>
          </div>
        </div>
      </div>
    </div>
    <button class="nav-btn left-nav" id="prev"><i class="bi bi-caret-left-fill"></i></button>
    <button class="nav-btn right-nav" id="next"><i class="bi bi-caret-right-fill"></i></button>
  </div>
</section>

<!---- Carousel n°3: avis google ---->
<section class="container-fluid my-4">
  <h2 class="titre-secondary text-uppercase text-center"><?= $newPage->getSecondTitle(3); ?></h2>
  <div class="container-fluid my-2">
    <a class="d-flex align-items-center gap-2" href="https://www.instagram.com/chocolaterielarouviere/" target="_blank" rel="noopener noreferrer">
      <i class="bi bi-instagram"></i>
      @chocolaterielarouviere
    </a>
  </div>
  <div class="container-fluid px-4" id="reseaux"></div>
</section>