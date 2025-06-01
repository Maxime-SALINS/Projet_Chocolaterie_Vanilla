<h2 class="text-uppercase text-center my-5">gestion des produits</h2>
<div class="container my-5">
    <a class="btn btn-primary" href="/dashboard/produits/ajout-produit"><i class="bi bi-plus-circle-fill"></i></a>
    <table class="table table-striped mt-2">
        <thead>
            <tr>
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
                    <td><?= $product_element['product_name'] ?></td>
                    <td><img class="img-fluid" src="<?= $product_element['image_product'] ?>" alt="image-produit"></td>
                    <td>
                        <p class="overflow-auto" style="max-height: 70px;"><?= $product_element['description'] ?></p>
                    </td>
                    <td class="text-center"><?= $product_element['category_name'] ?></td>
                    <td>
                        <a class="btn btn-success my-1" href="/dashboard/produit/modification/<?= $product_element['idProduct'] ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <a class="btn btn-danger my-1" href="/dashboard/produit/supprimer/<?= $product_element['idProduct'] ?>">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination pagination-sm">
        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <li class="page-item <?= $i == $current_page ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>
      </ul>
    </nav>
</div>