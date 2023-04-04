<?php
require_once "Model/modelEnchere.php";
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $produit = voirAllProduit($pdo);
    require_once "Templates/Encheres/pageAccueil.php";
}elseif ($uri === "/voirEnchere") {
    require_once "Templates/voirEnchere/voirEnchere.php";
}