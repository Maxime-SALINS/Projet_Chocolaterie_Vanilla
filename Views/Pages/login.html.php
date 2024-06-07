<div class="container w-25 my-5">
    <form class="form-control" action="" method="post">
        <h1 class="titre_principal text-uppercase text-center my-3"><?= $first_title ?></h1>
        <div class="contanier my-4">
            <input class="form-control" type="email" name="email" id="email" placeholder="Entrez votre email">
        </div>
        <?php if(isset($msg_error)): ?>
            <div class="alert alert-danger">
                <?= $msg_error?>
            </div>
        <?php endif;?>
        <div class="contanier my-4">
            <input class="form-control" type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
        </div>
        <?php if(isset($msg_error)): ?>
            <div class="alert alert-danger">
                <?= $msg_error?>
            </div>
        <?php endif;?>
        <div class="d-flex justify-content-center my-2">
            <button class="btn btn-primary" type="submit">Connexion</button>
        </div>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger text-center">
                <?= $error?>
            </div>
        <?php endif;?>
    </form>
</div>