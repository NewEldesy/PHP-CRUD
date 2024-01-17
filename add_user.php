<?php
include('conf.php');

// Appel de la fonction avec la connexion PDO en paramètre
$pdo = new Config_db();
$insert = $pdo->insertUsers();
?>