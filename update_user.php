<?php
include ("conf.php");

if (isset($_POST['btn_maj'])) {
    if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
            $data['id']=$_POST['id'];
            $data['nom']=$_POST['nom'];
            $data['prenom']=$_POST['prenom'];
            $data['email']=$_POST['email'];

            $pdo = new Config_db();
            $maj = $pdo->majUsers($data);
        }
    }
}