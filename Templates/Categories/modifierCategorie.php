<form method="POST">
    <div>
        <label for="categoryType">Type</label>
        <input type="text" name="categoryType" id="categoryType" value="<?= $categorie->categorieType ?>">
        <?php if(isset($messageError["categoryType"])) : ?> <p> <?= $messageError["categoryType"] ?> </p> <?php endif ?>
    </div>
    <button type="submit" name="btnEnvoi">Modifier</button>
    <button type="submit" name="btnSupprimer">Supprimer</button>
</form>

