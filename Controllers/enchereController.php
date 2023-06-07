<?php
require_once "Model/modelEnchere.php";
require_once "Model/modelCategorie.php";
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $produit = voirAllProduit($pdo);
    require_once "Templates/Encheres/pageAccueil.php";
}elseif (str_starts_with( $uri , "/selectProduit")) {
    $enchere = voirProduit($pdo);
    require_once "Templates/Encheres/selectProduit.php";
}


elseif ($uri === "/ajoutProduit") {
    $categories = selectAllCategories($pdo);

    if (isset($_POST['btnEnvoi'])) {
        $messageError = verifData();
        if(!isset($messageError)){
            ajoutEnchere($pdo);
            $lastId = $pdo->lastInsertId();
            foreach($_POST['cat'] as $cat) {
                ajoutCategorieEnchere($pdo, $lastId, $cat);
            }
            header('location:/');
        }
    }

require_once "Templates/Encheres/ajoutProduit.php";
} else if (str_starts_with($uri, "/deleteEnchere?id=")) {
    deleteEnchere($pdo);
    
    header('location:/');
}elseif (str_starts_with($uri, "/modifierProduit?id=")) {
    $categories = selectAllCategories($pdo);
    $produit = voirProduit($pdo);
    $categoriesEnchere = selectCategoriesProduit($pdo);

    $categoriesIdEnchere = [];

    foreach($categoriesEnchere as $categorieEnchere) {
        $categoriesIdEnchere[] = $categorieEnchere->categorieId;
    }

    if (isset($_POST['btnEnvoi'])) {
        $messageError = verifData();
        if(!isset($messageError)){
            updateEnchere($pdo);
            deleteCategorieEnchere($pdo, $_GET['id']);
            foreach($_POST['cat'] as $cat) {
                    ajoutCategorieEnchere($pdo, $_GET['id'], $cat);
                }
            header('location:/');
        }
    }

require_once "Templates/Encheres/modifierProduit.php";
}