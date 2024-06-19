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
        <h2 class="titre-secondary text-uppercase text-center my-4"><?= $newPage->getSecondTitle(1)?></h2>
        <div class="container">
            <div class="row text-center">
                <?php foreach($product_elements as $product_element):?>
                    <div class="col-md-4 mb-4">
                        <div class="card-body">
                            <h3 class="titre-tertiary my-3"><?= $product_element['product_name']?></h3>
                            <img class="card-img-top rounded" src="<?= $product_element['image_product']?>" alt="image produit chocolat">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-product btn-product-small text-white my-3" href="/produit/detail?product_id=<?= $product_element['product_id']?>">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</div>