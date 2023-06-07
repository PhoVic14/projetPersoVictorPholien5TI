<link rel="stylesheet" href="CSS/style.css">
<h1>Modifier un produit</h1>
    <form action="" method="post">
        <div class="kdb">
            <fieldset>
                <div class="remplir">
                    <label for="titre">Titre : </label>
                    <input name="titre" type="text" id="titre" placeholder="Votre titre" value="<?= $produit->produitTitre ?>">
                    <?php if(isset($messageError["titre"])) : ?> <p> <?= $messageError["titre"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="image">Entrez votre image :</label>
                    <input name="image" type="text" id="image" placeholder="Votre image" value="<?= $produit->produitImage ?>">
                    <?php if(isset($messageError["image"])) : ?> <p> <?= $messageError["image"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="note"> Entrez la note : </label>
                    <input name="note" type="number" min="0" max="10" id="note" placeholder="Votre note (0-10)" value="<?= $produit->produitNote ?>">
                    <?php if(isset($messageError["note"])) : ?> <p> <?= $messageError["note"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                    <label for="description"> Entrez la description : </label>
                    <input name="description" type="text" id="description" placeholder="Description" value="<?= $produit->produitDescription ?>">
                    <?php if(isset($messageError["description"])) : ?> <p> <?= $messageError["description"] ?> </p> <?php endif ?>
                </div>
                <div class="remplir">
                <label for ="cat-select">Choisis une catégorie</label>
                <select name="cat[]" id="cat-select" multiple require>
                        <?php foreach($categories as $categorie): ?> 
                            <option value="<?= $categorie->categorieId ?>" <?= in_array($categorie->categorieId, $categoriesIdEnchere) ? 'selected' : '' ?>><?= $categorie->categorieType ?></option>
                        <?php endforeach ?>
                </select>
            </fieldset>
        
            <div class="Add">
                <button class="butters" type="submit" name="btnEnvoi" class="btn btn-primary" value="envoyer">Modifier</button>
            </div>
        </div>
</form>

<h1>Catégories</h1>
<div class="menu flex space-evenly">
<a href="ajoutCategorie">Ajouter une catégorie</a>
                        </div>
<h1>Modifier les catégories</h1>
<div class="menu flex space-evenly">
<?php foreach($categories as $categorie): ?> 
                            <a href="modifierCategorie?id=<?= $categorie->categorieId ?>"><?= $categorie->categorieType ?></a>
                        <?php endforeach ?>
</div>