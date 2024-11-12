<div class="row gx-0">
    <div class="col-2 color-product"></div>
    <div class="col-10">
        <img class="img-fluid w-100" src="<?= $newPage->getImage(1);?>" alt="<?= $newPage->getAlt(1);?>">
    </div>
</div>
<div class="row gx-0">
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/Components/filter-product.html.php';?>
    <section class="col-12 col-sm-10 px-2">
        <h2 class="titre-secondary text-uppercase text-center my-4"><?= $newPage->getSecondTitle(1)?></h2>
        <div class="container">
            <div class="row text-center">
                <?php foreach($product_elements as $product_element):?>
                    <div class="col-md-4 mb-4">
                        <div class="card-body">
                            <h3 class="titre-tertiary my-3"><?= $product_element['product_name']?></h3>
                            <img class="card-img-top rounded" src="<?= $product_element['image_product']?>" alt="image produit chocolat">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-product btn-product-small text-white my-3" href="/produit/detail/<?= $product_element['idProduct']?>">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <!-- <div class="container">
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
        </div> -->
    </section>
</div>