<?php

function selectAllCategories($pdo)
{
    try{
        $query = "select * from categorie";
        $selectAllCategories = $pdo->prepare($query);
        $selectAllCategories->execute();
        $categories = $selectAllCategories->fetchAll();
        return $categories;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function ajoutCategorieEnchere($pdo, $enchereId, $categoryId)
{
    try {
        $query = "INSERT INTO produit_categorie (categorieId, produitId) VALUES (:categoryId, :enchereId)";
        $ajoutEnchere = $pdo->prepare($query);
        $ajoutEnchere->execute([
            'enchereId' => $enchereId,
            'categoryId' => $categoryId,
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}