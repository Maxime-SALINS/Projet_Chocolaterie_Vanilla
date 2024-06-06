<div class="my-2">
    <img class="img-fluid w-100" src="<?= $newPage->getImage(1);?>" alt="<?= $newPage->getAlt(1);?>">
</div>
<section class="container-fluid my-6">
    <h2 class="titre-secondary text-uppercase text-center my-4"><?= $newPage->getSecondTitle(1)?></h2>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-5 text-center">
            <img class="img-fluid rounded" src="<?= $newPage->getImage(2);?>" alt="<?= $newPage->getAlt(2);?>">
        </div>
        <div class="col-12 col-sm-5">
            <p class="text-description"><?= $newPage->getText(1);?></p>
            <p class="text-description"><?= $newPage->getText(2);?></p>
            <p class="text-description"><?= $newPage->getText(3);?></p>
        </div>
    </div>
</section>
<section class="container-fluid my-5">
    <h2 class="titre-secondary text-uppercase text-center my-5"><?= $newPage->getSecondTitle(2)?></h2>
    <div class="row">
        <div class="col-12 col-lg-6">
            <p><?= $newPage->getText(4);?></p>
            <p><?= $newPage->getText(5);?></p>
            <p><?= $newPage->getText(6);?></p>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row my-3">
                <div class="col-12 col-md-3 col-lg-6">
                    <img class="img-fluid rounded" src="<?= $newPage->getImage(3);?>" alt="<?= $newPage->getAlt(3);?>">
                </div>
                <div class="col-12 col-md-3 col-lg-6">
                    <img class="img-fluid rounded" src="<?= $newPage->getImage(4);?>" alt="<?= $newPage->getAlt(4);?>">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-3 col-lg-6">
                    <img class="img-fluid rounded" src="<?= $newPage->getImage(5);?>" alt="<?= $newPage->getAlt(5);?>">
                </div>
                <div class="col-12 col-md-3 col-lg-6">
                    <img class="img-fluid rounded" src="<?= $newPage->getImage(6);?>" alt="<?= $newPage->getAlt(6);?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid my-5">
    <h2 class="titre-secondary text-uppercase text-center my-5"><?= $newPage->getSecondTitle(3)?></h2>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
            <img class="img-fluid" src="<?= $newPage->getImage(7);?>" alt="<?= $newPage->getAlt(7);?>">
            <p class="my-4"><?= $newPage->getText(7);?></p>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <img class="img-fluid" src="<?= $newPage->getImage(8);?>" alt="<?= $newPage->getAlt(8);?>">
            <p class="my-4"><?= $newPage->getText(8);?></p>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <img class="img-fluid" src="<?= $newPage->getImage(9);?>" alt="<?= $newPage->getAlt(9);?>">
            <p class="my-4"><?= $newPage->getText(9);?></p>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <img class="img-fluid" src="<?= $newPage->getImage(10);?>" alt="<?= $newPage->getAlt(10);?>">
            <p class="my-4"><?= $newPage->getText(10);?></p>
        </div>
    </div>
</section>