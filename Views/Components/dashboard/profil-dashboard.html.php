<h2 class="text-uppercase text-center">Profil</h2>
<div class="row">
    <section class="col-4 card mx-auto">
        <h3 class="text-center my-3">Informations du profil</h3>
        <ul class="container-fluid">
            <li class="list-group-item my-2">Prénom : <?= $_SESSION['name'] ?></li>
            <li class="list-group-item my-2">Email : <?= $_SESSION['email'] ?></li>
            <li class="list-group-item my-2">Rôle : <?= $_SESSION['role'] ?> </li>
        </ul>
    </section>
    <section class="col-4 card mx-auto text-center">
        <h3 class="text-center my-3">Modification du profil</h3>
        <form action="" method="post">
            <div class="container my-4">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="FormControlInputEmail" class="form-label mx-5">Prénom</label>
                    <button class="btn btn-success" type="button" id="btn-name">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                </div>
                <input class="form-control d-none my-2" type="text" name="username" id="username" placeholder="Entrez votre prénom">
            </div>
            <div class="container my-4">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="FormControlInputEmail" class="form-label mx-5">Email</label>
                    <button class="btn btn-success" type="button" id="btn-email">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                </div>
                <input class="form-control d-none my-2" type="email" name="email" id="email" placeholder="Entrez votre nouvel email">
            </div>
            <div class="container my-4">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="FormControlInputpassword" class="form-label mx-5">Mot de passe</label>
                    <button class="btn btn-success" type="button" id="btn-password">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                </div>
                <input class="form-control d-none my-2" type="password" name="password" id="password" placeholder="Entrez votre nouveau mot de passe">
            </div>
            <div class="container my-3">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </section>
</div>