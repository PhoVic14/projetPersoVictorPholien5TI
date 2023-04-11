<?php
require_once "Model/modelEnchere.php";
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $produit = voirAllProduit($pdo);
    require_once "Templates/Encheres/pageAccueil.php";
}elseif ($uri === "/voirEnchere") {
    require_once "Templates/voirEnchere/voirEnchere.php";
}

require_once "Templates/Encheres/ajoutProduit.php";

if ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])) {
        $messageError = verifData();
        if(!isset($messageError)){
            connectUser($pdo);
            header('location:/');
        }
    }
}