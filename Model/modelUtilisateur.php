<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateur (utilisateurPseudo, utilisateurEmail, utilisateurPrenom, utilisateurNom, utilisateurDateDeNaissance, utilisateurMotDePasse, utilisateurRole ) values (:utilisateurPseudo, :utilisateurEmail, :utilisateurPrenom, :utilisateurNom, :utilisateurDateDeNaissance, :utilisateurMotDePasse, \"utilisateur\")"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurNom' => $_POST["nom"],
            'utilisateurPrenom' => $_POST["prenom"],
            'utilisateurPseudo' => $_POST["pseudo"],
            'utilisateurEmail' => $_POST["email"],
            'utilisateurMotDePasse' => $_POST["mdp"],
            'utilisateurDateDeNaissance' => $_POST['naissance']
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function connectUser($pdo){
    try {
        $query = "select * from utilisateur where utilisateurPseudo = :utilisateurPseudo and utilisateurMotDePasse = :utilisateurMotDePasse";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurMotDePasse' => $_POST['mdp'],
        ]);
        $user = $connectUser->fetch();
        if($user) {
            $_SESSION['user'] = $user;
        }else{
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($pdo)
{
    try {
        $query = "UPDATE utilisateur SET utilisateurPseudo = :utilisateurPseudo, utilisateurNom = :utilisateurNom, utilisateurPrenom = :utilisateurPrenom, utilisateurMotDePasse = :utilisateurMotDePasse, utilisateurEmail = :utilisateurEmail WHERE utilisateurId = :utilisateurId";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurNom' => $_POST['nom'],
            'utilisateurPrenom' => $_POST['prenom'],
            'utilisateurEmail' => $_POST['email'],
            'utilisateurMotDePasse' => $_POST['mdp'],
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteUser($pdo)
{
    
    
    try {
        $query = 'delete from utilisateur where utilisateurId = :utilisateurId';
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    try {
        $query = 'delete from produit where utilisateurId = :utilisateurId';
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    try {
        $query = 'delete from produit_categorie where utilisateurId = :utilisateurId';
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    
    try {
        $query = 'delete from enchere where utilisateurId = :utilisateurId';
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    
}

function reloadSession($pdo)
{
    try {
        $query = "select * from utilisateur where utilisateurId = :utilisateurId";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}



