<div class="center">
    <h1>Les produits</h1>
</div>
<div class="flex wrap">
  <?php foreach ($produit as $produit) : ?>
    <div class="produit">
      <img src=<?= $produit->produitImage ?>>
      <p><?= $produit->produitTitre ?></p>
      <a href="selectProduit">
    </div>
  <?php endforeach ?>
</div>
