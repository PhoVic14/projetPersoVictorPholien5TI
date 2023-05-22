<h1>Enchere</h1>
<div class="flex space-around essaye">
    <div>
        <ol>
            <div>
                <li>Nom</li>
                    <p><?= $enchere->produitTitre ?></p>
            </div>
            <div>
                <li>Note</li>
                <p><?= $enchere->produitNote ?></p>
            </div>
            <div>
                <li>Description</li>
                <p><?= $enchere->produitDescription?></p>
            </div>
            <div>
                <li>image</li>
                <img src=<?= $enchere->produitImage ?>>
            </div>
        </ol>
    </div>
</div>
    <a href="deleteEnchere?id=<?= $enchere->produitId ?>">Supprimer</a>
