<h2 class="text-uppercase text-center">gestion de la newsletter</h2>
<div class="container my-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($news_elements as $news_element):?>
                <tr>
                    <th scope="row"><?=$news_element['idNewsletter']?></th>
                    <td><?=$news_element['email']?></td>
                    <td>
                        <a class="btn btn-danger" href="/dashboard/newsletter/delete?email=<?=urlencode($news_element['email'])?>">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>