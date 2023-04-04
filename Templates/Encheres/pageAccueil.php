<div class= "center">
    
    <h1>Les produits</h1>

            <?php foreach($produit as $produit) : ?>
                <p><?= $produit->produitTitre ?>
                <img src=<?= $produit->produitImage ?>>

            <?php endforeach ?>
</div>