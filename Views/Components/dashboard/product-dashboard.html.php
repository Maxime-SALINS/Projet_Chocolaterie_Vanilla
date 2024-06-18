<h2 class="text-uppercase text-center">gestion des produits</h2>
<a class="btn btn-primary" href="/dashboard/produit/ajout-produit">Ajouter un nouveau produit</a>
<div class="container my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product_elements as $product_element) : ?>
                <tr>
                    <th scope="row"><?= $product_element['product_id'] ?></th>
                    <td><?= $product_element['product_name'] ?></td>
                    <td><img class="img-fluid" src="<?= $product_element['image_product'] ?>" alt="image-produit"></td>
                    <td>
                        <p class="overflow-auto" style="max-height: 70px;"><?= $product_element['description'] ?></p>
                    </td>
                    <td class="text-center"><?= $product_element['category_name'] ?></td>
                    <td>
                        <a class="btn btn-success my-1" href="/dashboard/produit/modification?product_id=<?= $product_element['product_id'] ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <a class="btn btn-danger my-1" href="/dashboard/produit/supprimer?id=<?= $product_element['product_id'] ?>">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>