<h2 class="text-uppercase text-center my-5">gestion du contenue</h2>
<div class="container my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Contenu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($page_elements as $page_element) : ?>
                <tr>
                    <?php if($page_element['element_type'] === 'h1'): ?>
                        <td>Titre principale</td>
                    <?php elseif($page_element['element_type'] === 'h2'):?>
                        <td>Titre secondaire</td>
                    <?php elseif($page_element['element_type'] === 'h3'):?>
                        <td>Sous-titre</td>
                    <?php elseif($page_element['element_type'] === 'image'):?>
                        <td>image</td>
                    <?php elseif($page_element['element_type'] === 'image description'):?>
                        <td>Description de l'image</td>
                    <?php else:?>
                        <td>Texte</td>
                    <?php endif;?>
                    <td class="w-50">
                        <?php if($page_element['element_type'] === 'image'): ?>
                            <img class="img-fluid" style="width: 150px; heigth: 150px;" src="<?= $page_element['content'] ?>" alt="image base de données">
                        <?php else:?>
                            <?= $page_element['content'] ?>
                        <?php endif;?>
                    </td>
                    <td>
                        <a class="btn btn-success" href="/dashboard/contenu/update/<?= $page_element['idElements']?>/<?= $page_element['element_type']?>">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination pagination-circle">
        <li class="page-item <?= $current_page <= 1 ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?= max(1, $current_page - 1) ?>" tabindex="-1" aria-disabled="<?= $current_page <= 1 ? 'true' : 'false' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
              <path d="M15 6l-6 6l6 6" />
            </svg>
          </a>
        </li>
        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
          <li class="page-item <?= $i == $current_page ? 'active' : '' ?>">
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
          </li>
        <?php endfor; ?>
        <li class="page-item <?= $current_page >= $total_pages ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?= min($total_pages, $current_page + 1) ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
              <path d="M9 6l6 6l-6 6" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
</div>