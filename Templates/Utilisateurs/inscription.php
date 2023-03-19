<link rel="stylesheet" href="CSS/style.css">
<h1>Inscription</h1>
    <form action="" method="post">
        <fieldset>
            <legend>S'inscrire</legend>
            <div>
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo">
                <?php if(isset($messageError["pseudo"])) : ?> <p> <?= $messageError["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="email">Entrez votre Email :</label>
                <input name="email" type="email" id="email" placeholder="Votre email">
                <?php if(isset($messageError["email"])) : ?> <p> <?= $messageError["email"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="prenom"> Entrez votre prenom : </label>
                <input name="prenom" type="text" id="prenom">
                <?php if(isset($messageError["prenom"])) : ?> <p> <?= $messageError["prenom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="nom"> Entrez votre nom : </label>
                <input name="nom" type="text" id="nom">
                <?php if(isset($messageError["nom"])) : ?> <p> <?= $messageError["nom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="mdp">Entrez votre mot de passe : (8 caractères minimum)</label>
                <input name="mdp" type="password" id="mdp" minlength="8" >
                <?php if(isset($messageError["mdp"])) : ?> <p> <?= $messageError["mdp"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="naissance"> Date de naissance : </label>
                <input name="naissance" type="date" id="naissance">
                <?php if(isset($messageError["naissance"])) : ?> <p> <?= $messageError["naissance"] ?> </p> <?php endif ?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton Inscription</legend>
            <input type="submit" value="S'inscrire" name="btnEnvoi">
        </fieldset>
</form>