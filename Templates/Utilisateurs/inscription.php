<link rel="stylesheet" href="CSS/style.css">
    <form action="" method="post">
        <fieldset>
        <legend><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Inscription<?php endif ?></legend>
            <div class="remplir">
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPseudo ?><?php endif ?>">
                <?php if(isset($messageError["pseudo"])) : ?> <p> <?= $messageError["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="email">Entrez votre Email :</label>
                <input name="email" type="email" id="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurEmail ?><?php endif ?>">
                <?php if(isset($messageError["email"])) : ?> <p> <?= $messageError["email"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="prenom"> Entrez votre prenom : </label>
                <input name="prenom" type="text" id="prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPrenom ?><?php endif ?>">
                <?php if(isset($messageError["prenom"])) : ?> <p> <?= $messageError["prenom"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="nom"> Entrez votre nom : </label>
                <input name="nom" type="text" id="nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurNom ?><?php endif ?>">
                <?php if(isset($messageError["nom"])) : ?> <p> <?= $messageError["nom"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="mdp">Entrez votre mot de passe : (8 caractères minimum)</label>
                <input name="mdp" type="password" id="mdp" minlength="8" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMotDePasse ?><?php endif ?>"> 
                <?php if(isset($messageError["mdp"])) : ?> <p> <?= $messageError["mdp"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="naissance"> Date de naissance : </label>
                <input name="naissance" type="date" id="naissance" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurDateDeNaissance ?><?php endif ?>">
                <?php if(isset($messageError["naissance"])) : ?> <p> <?= $messageError["naissance"] ?> </p> <?php endif ?>
            </div> 
        </fieldset>
        <div class="add connexion">
            <button class="butters" name="<?= isset($_SESSION['user']) ? 'btnModifier' : 'btnEnvoi' ?>" class="btn btn-primary" value="1" type="submit"><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Envoyer<?php endif ?></button>
        </div>
</form>