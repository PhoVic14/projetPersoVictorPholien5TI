<h1>Profil</h1>
<p>Nom : </p>
<p><?= $_SESSION["user"]->utilisateurNom ?> </p>
<p>Prenom : </p>
<p><?= $_SESSION["user"]->utilisateurPrenom ?> </p>
<p>Email : </p>
<p><?= $_SESSION["user"]->utilisateurEmail ?> </p>
<p>Mot de passe : </p>
<p><?= $_SESSION["user"]->utilisateurMotDePasse ?> </p>
<a href="updateUser">Modifier</a>
<a href="deleteUser">Supprimer</a>