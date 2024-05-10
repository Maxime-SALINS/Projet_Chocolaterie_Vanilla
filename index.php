<?php require 'views/Components/header.php'; ?>

<!---- Carousel n°1 ---->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/images/carousel-n1/947672D0-BAE1-4909-8B19-3A59C1DA6680.jpeg" class="d-block w-100" alt="image chocolaterie">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/carousel-n1/7DC22F4B-08A1-4656-8E69-9026556B8497.jpeg" class="d-block w-100" alt="image chocolaterie">
    </div>
    <div class="carousel-item">
      <img src="/assets/images/carousel-n1/DSCF6810.JPG" class="d-block w-100" alt="image chocolaterie">
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
<section class="text-center my-5">
    <h2 class="text-uppercase">nos produits</h2>
    <div class="row">
        <div class="col-12 col-md-4">
            <h3 class="text-uppercase">chocolat</h3>
            <img class="card-img-top" src="/assets/images/produits/DSCF8353.JPG" alt="image produit chocolat">
            <a href="#">En savoir plus</a>
        </div>
        <div class="col-12 col-md-4">
            <h3 class="text-uppercase">café & thé</h3>
            <img class="card-img-top" src="/assets/images/produits/810BC1B5-95C7-49E7-B402-B8A8757E5BC0.jpeg" alt="image produit café et thé">
            <a href="#">En savoir plus</a>
        </div>
        <div class="col-12 col-md-4">
            <h3 class="text-uppercase">glace</h3>
            <img class="card-img-top" src="/assets/images/produits/DSCF8358.JPG" alt="image produit glace">
            <a href="#">En savoir plus</a>
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
      <img src="/assets/images/carousel-n2/DSCF3833.JPG" class="d-block w-100" alt="image chocolaterie">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/images/carousel-n2/DSCF3836.JPG" class="d-block w-100" alt="image chocolaterie">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/images/carousel-n2/DSCF6809.JPG" class="d-block w-100" alt="image chocolaterie">
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
<section>
    <h2>ce que disent nos clients</h2>
</section>

<!---- Carousel n°3: avis google ---->
<section>
    <h2>suivez nous sur nos réseaux</h2>
</section>

<?php require 'views/Components/footer.php';?>