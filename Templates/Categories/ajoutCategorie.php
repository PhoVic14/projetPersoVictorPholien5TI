<form method="POST">
    <div>
        <label for="categoryType">Type</label>
        <input type="text" name="categoryType" id="categoryType">
        <?php if(isset($messageError["categoryType"])) : ?> <p> <?= $messageError["categoryType"] ?> </p> <?php endif ?>
    </div>
    <button type="submit" name="btnEnvoi">Créer</button>
</form>