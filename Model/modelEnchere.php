<?php

function voirAllProduit($pdo)
{
    try{
        $query = "select * from produit";
        $voirAllProduit = $pdo->prepare($query);
        $voirAllProduit->execute();
        $produit = $voirAllProduit->fetchAll();
        return $produit;
        var_dump($voirAllProduit);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function voirProduit($pdo)
{
    try{
        $query = "select * from produit where produitId = :produitId;";
        $voirProduit = $pdo->prepare($query);
        $voirProduit->execute([
            "produitId" => $_GET["id"]
        ]);
        $produit = $voirProduit->fetch();
        return $produit;
        var_dump($voirProduit);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteAllEnchereFromUser($pdo)
{
    try{
        $query = "delete from enchere where utilisateurId = :utilisateurId";
        $deleteAllEnchereFromUser = $pdo->prepare($query);
        $deleteAllEnchereFromUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);

        $query = "delete from produit where utilisateurId = :utilisateurId";
        $deleteAllEnchereFromUser = $pdo->prepare($query);
        $deleteAllEnchereFromUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);

        $query = "delete from produit_categorie where utilisateurId = :utilisateurId";
        $deleteAllEnchereFromUser = $pdo->prepare($query);
        $deleteAllEnchereFromUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);

        
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteEnchere($pdo)
{
    try{
        $query = "delete from produit_categorie where produitId = :produitId";
        $deleteCat = $pdo->prepare($query);
        $deleteCat->execute([
            'produitId' => $_GET['id']
        ]);

        $query = "delete from produit where produitId = :produitId";
        $deleteEnchere = $pdo->prepare($query);
        $deleteEnchere->execute([
            'produitId' => $_GET['id']
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}



function updateEnchere($pdo)
{
    try {
        $query = "UPDATE produit SET produitTitre = :produitTitre, produitImage = :produitImage, produitNote = :produitNote, produitDescription = :produitDescription WHERE utilisateurId = :utilisateurId";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'produitTitre' => $_POST['titre'],
            'produitImage' => $_POST['image'],
            'produitNote' => $_POST['note'],
            'produitDescription' => $_POST['description'],
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function ajoutEnchere($pdo)
{
    try {
        $query = "INSERT INTO produit (produitTitre, produitImage, produitNote, produitDescription, utilisateurId) VALUES (:produitTitre, :produitImage, :produitNote, :produitDescription, :utilisateurId)";
        $ajoutEnchere = $pdo->prepare($query);
        $ajoutEnchere->execute([
            'produitTitre' => $_POST['titre'],
            'produitImage' => $_POST['image'],
            'produitNote' => $_POST['note'],
            'produitDescription' => $_POST['description'],
            'utilisateurId' => $_SESSION['user']->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}