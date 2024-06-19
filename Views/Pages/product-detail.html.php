<div class="row">
    <div class="col-2 color-product p-0"></div>
    <div class="col-10 p-0">
        <img class="img-fluid w-100" src="<?= $newPage->getImage(1);?>" alt="<?= $newPage->getAlt(1);?>">
    </div>
</div>
<div class="d-flex">
    <aside class="filter col-2 p-3">
        <h3 class="text-center my-3">Filtre</h3>
        <div class="container">
            <form action="" method="post">
                <h4 class="text-center text-decoration-underline my-3">Filter par type :</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_chocolat" id="filter_chocolat" value="chocolat">
                    <label class="form-check-label" for="vendu">Chocolats</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_cafe" id="filter_cafe" value="cafe">
                    <label for="stock">Café</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_the" id="filter_the" value="the">
                    <label for="vendu">Thé</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_glace" id="filter_glace" value="glace">
                    <label for="stock">Glace</label>
                </div>
                <h4 class="text-center text-decoration-underline my-3">Type de chocolat:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_chocolat" id="filter_chocolat" value="chocolat">
                    <label for="vendu">Chocolats noir</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_cafe" id="filter_cafe" value="cafe">
                    <label for="stock">Chocolats au lait</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_the" id="filter_the" value="the">
                    <label for="vendu">Chocolats praliné</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_glace" id="filter_glace" value="glace">
                    <label for="stock">Chocolats alcoolisé</label>
                </div>
                <h4 class="text-center text-decoration-underline my-3">Café ou thé:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_chocolat" id="filter_chocolat" value="chocolat">
                    <label for="vendu">Café grain</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_cafe" id="filter_cafe" value="cafe">
                    <label for="stock">Café capucino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_the" id="filter_the" value="the">
                    <label for="vendu">Thé vert</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="filter_glace" id="filter_glace" value="glace">
                    <label for="stock">Thé noir</label>
                </div>
            </form>
        </div>
    </aside>
    <section class="col-10 p-0">
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
    </section>
</div>