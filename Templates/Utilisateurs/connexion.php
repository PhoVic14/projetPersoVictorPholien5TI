<h1>Connexion</h1>
    <form action="" method="post">
        <fieldset>
            <div class="remplir">
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo" >
                <?php if(isset($messageError["pseudo"])) : ?> <p> <?= $messageError["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div class="remplir">
                <label for="mdp">Entrez votre mot de passe:</label>
                <input name="mdp" type="password" id="mdp" minlength="8" >
                <?php if(isset($messageError["mdp"])) : ?> <p> <?= $messageError["mdp"] ?> </p> <?php endif ?>
            </div>
        </fieldset>
        <div class="connexion remplir add">
            <div class="mid">
            <input type="submit" value="Se connecter" name="btnEnvoi">
            </div>
        </div>
    </form>
