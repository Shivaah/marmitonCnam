<?php $this->title = "Connexion" ?>

<div class="border border-primary rounded mt-5 p-5 blockCenter">
    <h3 class="text-center mb-5">Connexion</h3>
    <form method="post" action="<?= $this->getIndex() . "/login" ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur...">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe...">
        </div>
        <button type="submit" class="btn btn-primary float-right ml-2">Connexion</button>
        <a href="<?= $this->getIndex() ?>" class="float-right text-decoration-none btn btn-secondary">Retour</a>
        <br>
    </form>
</div>

<?php echo $error ?>