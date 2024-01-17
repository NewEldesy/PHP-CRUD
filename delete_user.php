<?php
include ("conf.php");

$id = $_POST['id'];

$pdo = new Config_db();
$supprim = $pdo->supUsers($id);