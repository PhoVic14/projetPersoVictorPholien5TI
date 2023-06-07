<?php

function selectCategorie($pdo) {
        try{
        $query = "select * from categorie where categorieId = :categorieId";
        $selectCategorie = $pdo->prepare($query);
        $selectCategorie->execute([
            'categorieId' => $_GET['id']
        ]);
        return $selectCategorie->fetch();
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

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

function deleteCategorieEnchere($pdo, $enchereId) {
    try{
        $query = "delete from produit_categorie where produitId = :enchereId";
        $deleteCategorieEnchere = $pdo->prepare($query);
        $deleteCategorieEnchere->execute([
            'enchereId' => $enchereId
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectCategoriesProduit($pdo) {
    try{
        $query = "select categorieId from produit_categorie where produitId = :produitId";
        $selectCategoriesProduit = $pdo->prepare($query);
        $selectCategoriesProduit->execute([
            'produitId' => $_GET['id']
        ]);
        return $selectCategoriesProduit->fetchAll();
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function ajoutCategorie($pdo, $categorieType)
{
    try {
        $query = "INSERT INTO categorie (categorieType) VALUES (:categorieType)";
        $ajoutCategorie = $pdo->prepare($query);
        $ajoutCategorie->execute([
            'categorieType' => $categorieType
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function modifierCategorie($pdo, $categoryId, $categorieType)
{
    try {
        $query = "UPDATE categorie SET categorieType = :categorieType WHERE categorieId = :categorieId";
        $modifierCategorie = $pdo->prepare($query);
        $modifierCategorie->execute([
            'categorieType' => $categorieType,
            'categorieId' => $categoryId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function supprimerCategorie($pdo, $categoryId)
{
    try {
        $query = "DELETE FROM categorie WHERE categorieId = :categorieId";
        $supprimerCategorie = $pdo->prepare($query);
        $supprimerCategorie->execute([
            'categorieId' => $categoryId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}