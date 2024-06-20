<div class="row gx-0">
    <div class="col-2 color-product"></div>
    <div class="col-10">
        <img class="img-fluid w-100" src="<?= $newPage->getImage(1);?>" alt="<?= $newPage->getAlt(1);?>">
    </div>
</div>
<div class="d-flex">
    <section class="col-12 px-3">
        <h2 class="titre-secondary text-uppercase text-center my-4">catégorie <?= $product_element['category_name']?></h2>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <img class="w-100" src="<?= $product_element['image_product']?>" alt="image du produit">
                </div>
                <section class="col-12 col-sm-6">
                    <h3 class="titre-tertiary text-center"><?= $product_element['product_name']?></h3>
                    <p><?= $product_element['description']?></p>
                </section>
            </div>
        </div>
        <div class="container text-center my-5">
            <a class="btn btn-product" href="/produits">Retour à la page produit</a>
        </div>
    </section>
</div>