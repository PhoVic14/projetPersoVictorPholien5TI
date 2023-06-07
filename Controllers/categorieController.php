<?php
require_once "Model/modelCategorie.php";
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/ajoutCategorie") {
    if (isset($_POST['btnEnvoi'])) {
        $messageError = verifData();
        if(!isset($messageError)){
            ajoutCategorie($pdo, $_POST['categoryType']);
            header('location:/ajoutProduit');
        }
    }

require_once "Templates/Categories/ajoutCategorie.php";
} else if (str_starts_with($uri, "/modifierCategorie")) {
    $categorie = selectCategorie($pdo);

    if (isset($_POST['btnEnvoi'])) {
        $messageError = verifData();
        if(!isset($messageError)){
            modifierCategorie($pdo, $_GET['id'], $_POST['categoryType']);
            header('location:/ajoutProduit');
        }
    } else if (isset($_POST['btnSupprimer'])) {
        supprimerCategorie($pdo, $_GET['id']);
        header('location:/ajoutProduit');
    }

require_once "Templates/Categories/modifierCategorie.php";
}