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
            ajoutEnchere($pdo);
            $lastId = $pdo->lastInsertId();
            foreach($_POST['cat'] as $cat) {
                ajoutCategorieEnchere($pdo, $lastId, $cat);
            }
            header('location:/');
    }

require_once "Templates/Encheres/ajoutProduit.php";
} else if (str_starts_with($uri, "/deleteEnchere?id=")) {
    deleteEnchere($pdo);
    
    header('location:/');
}