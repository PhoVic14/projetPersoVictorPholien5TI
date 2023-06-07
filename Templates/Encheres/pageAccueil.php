<div class="center">
    <h1>Les produits</h1>
</div>
<div class="flex wrap mer">
  <?php foreach ($produit as $produit) : ?>
    <div class="produit">
      <img src="<?= $produit->produitImage ?>?y=<?= rand(1,1000) ?>">
      <p><?= $produit->produitTitre ?></p>
      <a class="" href="selectProduit?id=<?= $produit -> produitId?>">Voir Produit</a>
    </div>
  <?php endforeach ?>
</div>
