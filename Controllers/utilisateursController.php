<?php

require_once "Model/modelUtilisateur.php";
require_once "Model/modelEnchere.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])) {
        $messageError = verifData();
        if(!isset($messageError)){
            connectUser($pdo);
            header('location:/');
            
    }
}
    require_once "Templates/Utilisateurs/connexion.php";

} elseif ($uri === "/inscription") {
    if(isset($_POST["btnEnvoi"])){
        $messageError = verifData();
        if(!isset($messageError)){
            createUser($pdo);
            header('location:/connexion');
    }
} else if (isset($_POST['btnModifier'])) {
    $messageError = verifData();
    if(!isset($messageError)){
        updateUser($pdo);
        header("location:/profil");
    }
}
    require_once "Templates/Utilisateurs/inscription.php";

} elseif ($uri === "/profil") {
    require_once "Templates/Utilisateurs/profil.php";

} elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}elseif ($uri === "/profil") {
    require_once "Templates/Utilisateurs/profil.php";

}elseif ($uri === "/updateprofil") {
    if(isset($_POST["btnEnvoi"])){
        updateUser($pdo);
        reloadSession($pdo);
        header("location:/profil");
    }
    require_once "Ultilisateurs/inscription.php";



} elseif ($uri === "/deleteUser") {
    deleteAllEnchereFromUser($pdo);
    deleteUser($pdo);
    session_destroy();
    header("location:/");
}