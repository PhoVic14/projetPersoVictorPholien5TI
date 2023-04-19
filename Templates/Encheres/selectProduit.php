<h1>Enchere</h1>
<div class="flex space-around">
    <div>
        <ol>
            <div>
                <li>Nom</li>
                    <p><?= $enchere->enchereNom ?></p>
            </div>
            <div>
                <li>Prix</li>
                <p><?= $enchere->encherePrix ?></p>
            </div>
            <div>
                <li>Date</li>
                <p><?= $enchere->enchereDate ?></p>
            </div>
            <div>
                <li>Description</li>
                <p><?= $enchere->enchereDescription?></p>
            </div>
            <div>
                <li>image</li>
                <img id="enchereImage" src=<?= $enchere->$enchereImage?> alt="">
            </div>
        </ol>
    </div>
</div>