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



