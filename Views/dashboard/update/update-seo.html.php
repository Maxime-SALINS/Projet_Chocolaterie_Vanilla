<h2 class="text-uppercase text-center">Référencement SEO</h2>
<section class="container my-5">
    <h3 class="text-center">Modification de la description n°<?= $_GET['id'] ?></h3>
    <form action="" method="post">
        <div class="mb-3">
            <label for="meta_description" class="form-label">Description</label>
            <textarea class="form-control" name="meta_description" id="meta_description" rows="10"></textarea>
        </div>
        <div class="container text-center">
            <button class="btn btn-success" type="submit">Modification</button>
        </div>
    </form>
</section>