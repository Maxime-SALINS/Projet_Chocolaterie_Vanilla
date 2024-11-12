<section class="container w-50 my-5">
    <h2 class="text-uppercase text-center">modification du produit n°<?=$_GET['idProduct']?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="contanier g-0 my-4">
            <input class="form-control" type="text" name="product_name" id="product_name" placeholder="Entrez le nom du produit">
        </div>
        <div class="contanier g-0 my-4">
            <label for="meta_description" class="form-label">Veuillez déposer une image</label>
            <input class="form-control" type="file" name="image_product" id="product_image">
        </div>
        <div class="container g-0 my-4">
            <label for="description" class="form-label">Description du produit</label>
            <textarea class="form-control" name="description" id="description" rows="8"></textarea>
        </div>
        <div class="d-flex justify-content-center my-2">
            <button class="btn btn-success" type="submit">Modifier</button>
        </div>
        <?php if (isset($msg_error)) : ?>
            <div class="alert alert-danger">
                <?= $msg_error ?>
            </div>
        <?php endif; ?>
    </form>
</section>