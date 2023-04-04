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

