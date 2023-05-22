<h1>Profil</h1>
    <div class="profil">
        
            <p>Nom : </p>
                <p><?= $_SESSION["user"]->utilisateurNom ?> </p>
            <p>Prenom : </p>
                <p><?= $_SESSION["user"]->utilisateurPrenom ?> </p>
            <p>Email : </p>
                <p><?= $_SESSION["user"]->utilisateurEmail ?> </p>
            <p>Mot de passe : </p>
                <p><?= $_SESSION["user"]->utilisateurMotDePasse ?> </p>
            <p>Pseudo : </p>
                <p><?= $_SESSION["user"]->utilisateurPseudo ?> </p>
    </div>
    <div class="jsp">
            <a href="inscription">Modifier</a>
            <a href="deleteUser">Supprimer</a>
    </div>
        