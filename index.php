<link rel="stylesheet" href="CSS/style.css">
<?php
    session_start();
    require_once "Config/databaseConnection.php";
    /*try { 
        $query = "SELECT * FROM utilisateurs";
        $ajoute = $dbh -> prepare($query);
        $ajoute -> execute();
        $biens = $ajoute -> fetchALL();
    }
    catch(PDOExeption $e) {
        $message = $e->getMessage();
        die($message);
    }
    echo '<pre>' , var_dump($biens) , '<pre>';*/
    function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))){
            $messageError[$key] = "votre " . $key . " est vide";
            
        }
    }
    return isset($messageError) ? $messageError : null;
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <header>
        <div class="nos">
            <ul class="flex space-evenly">
                <li class="menu"><a href="/">Home</a></li>
                    <?php if(isset($_SESSION['user'])) : ?>
                        <li  class="menu"><a href="profil">Page profil</a></li>
                        <li  class="menu"><a href="ajoutProduit">Ajouter un produit</a></li>
                        <li  class="menu"><a href="deconnexion">Déconnexion</a></li>
                    <?php else : ?>
                        <li  class="menu"><a href="connexion">Connexion</a></li>
                        <li  class="menu"><a href="inscription">Inscription</a></li>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <?php 
            require_once "Controllers/enchereController.php";
            require_once "Controllers/utilisateursController.php";
            require_once "Controllers/categorieController.php";
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>