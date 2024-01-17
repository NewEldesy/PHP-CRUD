<?php
include('conf.php');
$pdo = db();

//fonction de mise a jour du departement
function MajDptmnt($data){

    $query = "UPDATE users SET nom = '$data[nom]', prenom = '$data[prenom]', email = '$data[email]' WHERE id = '$data[id]'";
    if ($sql=$this->connect->exec($query)) 
    {
        echo '<div class="alert alert-success" role="alert">
                Utilisateur modifier avec succes
            </div>
            <script>
                $("#exampleModalMaj").modal("hide")
            </script>';
    } else {
        echo '
        <div class="alert alert-danger" role="alert">
            Modification échoué
        </div>';
    }
}