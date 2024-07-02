<section class="container w-50 my-5">
    <h2 class="text-uppercase text-center">modification de l'élément n°<?=$_GET['id']?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <?php if($_GET['element_type'] === 'h1'|| $_GET['element_type'] === 'h2' || $_GET['element_type'] === 'h3'|| $_GET['element_type'] === 'alt'):?>
            <div class="contanier g-0 my-4">
                <input class="form-control" type="text" name="title" id="title" placeholder="Entrez la valeur du nouvel élément">
            </div>
        <?php elseif($_GET['element_type'] === 'image'):?>
            <div class="contanier g-0 my-4">
                <input class="form-control" type="file" name="image_page" id="image_page" placeholder="Déposez une image">
            </div>
        <?php elseif($_GET['element_type'] === 'text'):?>
            <div class="container g-0 my-4">
                <label for="text" class="form-label">Entrez votre nouveau texte</label>
                <textarea class="form-control" name="text" id="text" rows="8"></textarea>
            </div>
        <?php endif;?>
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