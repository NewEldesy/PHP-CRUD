<?php
include ("conf.php");

$pdo = new Config_db();
$supprim = $pdo->supUsers($id);