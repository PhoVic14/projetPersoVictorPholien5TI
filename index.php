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
        <ul class="flex space-evenly">
            <li class="menu"><a href="/">Home</a></li>
            <li  class="menu"><a href="ajoutProduit">Ajouter un produit</a></li>
            <li  class="menu"><a href="profil">Page profil</a></li>
            <li  class="menu"><a href="inscription">Inscription</a></li>
                <?php if(isset($_SESSION['user'])) : ?>
                    <li  class="menu"><a href="deconnexion">Déconnexion</a></li>
                <?php else : ?>
                    <li  class="menu"><a href="connexion">Connexion</a></li>
                <?php endif ?>
            </li>
        </ul>
    </header>
    <main>
        <?php 
            require_once "Controllers/enchereController.php";
            require_once "Controllers/utilisateursController.php";
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>