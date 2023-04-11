<link rel="stylesheet" href="CSS/style.css">
<h1>Ajouter un produit</h1>
    <form action="" method="post">
        <fieldset>
        <legend>Ajouter un produit</legend>
            <div>
                <label for="titre">Titre : </label>
                <input name="titre" type="text" id="titre" placeholder="Votre titre">
                <?php if(isset($messageError["titre"])) : ?> <p> <?= $messageError["titre"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="image">Entrez votre image :</label>
                <input name="image" type="varchar" id="image" placeholder="Votre image">
                <?php if(isset($messageError["image"])) : ?> <p> <?= $messageError["image"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="note"> Entrez la note : </label>
                <input name="note" type="text" id="note" placeholder="Votre note (0-10)">
                <?php if(isset($messageError["note"])) : ?> <p> <?= $messageError["note"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="description"> Entrez la description : </label>
                <input name="description" type="text" id="description" placeholder="Description">
                <?php if(isset($messageError["description"])) : ?> <p> <?= $messageError["description"] ?> </p> <?php endif ?>
            </div>
        </fieldset>
        <div>
            <button name="btnEnvoi" class="btn btn-primary" value="envoyer"><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Envoyer<?php endif ?></button>
        </div>
</form>