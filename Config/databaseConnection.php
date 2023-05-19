<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=victor', "victor", "root", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOExeption $e) {
    die("il y a une erreur : " . $e->getMessage());
}