<h1>Connexion</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Se connecter</legend>
            <div>
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo" >
                <?php if(isset($messageError["pseudo"])) : ?> <p> <?= $messageError["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="mdp">Entrez votre mot de passe:</label>
                <input name="mdp" type="password" id="mdp" minlength="8" >
                <?php if(isset($messageError["mdp"])) : ?> <p> <?= $messageError["mdp"] ?> </p> <?php endif ?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton Connexion</legend>
            <input type="submit" value="Se connecter" name="btnEnvoi">
        </fieldset>
    </form>
