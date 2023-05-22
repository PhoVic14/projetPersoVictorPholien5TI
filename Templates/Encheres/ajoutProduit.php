<link rel="stylesheet" href="CSS/style.css">
<h1>Ajouter un produit</h1>
    <form action="" method="post">
        <div class="kdb">
            <fieldset>
                <div class="remplir">
                    <label for="titre">Titre : </label>
                    <input name="titre" type="text" id="titre" placeholder="Votre titre">
                    <?php if(isset($messageError["titre"])) : ?> <p> <?= $messageError["titre"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="image">Entrez votre image :</label>
                    <input name="image" type="text" id="image" placeholder="Votre image">
                    <?php if(isset($messageError["image"])) : ?> <p> <?= $messageError["image"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="note"> Entrez la note : </label>
                    <input name="note" type="number" min="0" max="10" id="note" placeholder="Votre note (0-10)">
                    <?php if(isset($messageError["note"])) : ?> <p> <?= $messageError["note"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="description"> Entrez la description : </label>
                    <input name="description" type="text" id="description" placeholder="Description">
                    <?php if(isset($messageError["description"])) : ?> <p> <?= $messageError["description"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                <label for ="cat-select">Choisis une catégorie</label>
                <select name="cat[]" id="cat-select" multiple require>
                        <?php foreach($categories as $categorie): ?> 
                            <option value="<?= $categorie->categorieId ?>"><?= $categorie->categorieType ?></option>
                        <?php endforeach ?>
                </select>
            </fieldset>
        
            <div class="Add">
                <button type="submit" name="btnEnvoi" class="btn btn-primary" value="envoyer"><?php if(isset($_SESSION["user"])) : ?>Ajouter <?php else : ?>Envoyer<?php endif ?></button>
            </div>
        </div>
</form>