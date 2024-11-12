<h2 class="text-uppercase text-center">Référencement SEO</h2>
<div class="container my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pages</th>
                <th scope="col">Type</th>
                <th scope="col">Contenu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seo_elements as $seo_element) : ?>
                <tr>
                    <th scope="row"><?= $seo_element['element_id'] ?></th>
                    <td><?= $seo_element['page_name'] ?></td>
                    <td><?= $seo_element['element_type'] ?></td>
                    <td><?= $seo_element['content'] ?></td>
                    <td>
                        <a class="btn btn-success" href="/dashboard/referencement/modification?id=<?= $seo_element['element_id'] ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>