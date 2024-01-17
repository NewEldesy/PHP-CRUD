<?php

class Config_db{

    private $pdo;

    public function __construct(){
        try 
        {
          $this->pdo = new PDO('mysql:host=localhost;dbname=crud_project', 'admin', 'Admin1234!');
          $this->pdo->exec("set names utf8");
        } 
        catch (PDOException $e) 
        {
          echo "Erreur de connection".$e->getMessage();
        }

    }

    // Fonction qui fait les enregistrements des départements
    function insertUsers(){
        if (isset($_POST['btn_add'])) {
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])){
                if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                
                    $query = "INSERT INTO users(nom, prenom, email) VALUES('$nom', '$prenom', '$email')";
                    $sql = $this->pdo->prepare($query);
                    if ($sql->execute()){
                        echo '<div class="alert alert-success" role="alert">
                                Utilisateur enregistré avec succès
                            </div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">
                                Enregistrement échoué
                            </div>';
                    }
                } else {
                    echo '<div class="alert alert-warning" role="alert">
                            Attention champ est vide</div>';
                }
            }
        }
    }

    //Fonction qui affiche les utilisateurs
    public function affUsers()
    {
       $data = null;

       $query = "SELECT * FROM users";
       $stmt = $this->pdo->prepare($query);
       $stmt->execute(); 

       $data = $stmt->fetchAll();

       return $data;

    }

    //Fonction qui supprime utilisateurs
    public function supUsers($id){
        $query = "DELETE FROM users WHERE id = '$id'";
        $sql = $this->pdo->prepare($query);
        
        if ($sql->execute()) {
          echo '<div class="alert alert-success" role="alert">
                    Utilisateur supprimer avec succes</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">
                La Suppression a echoue</div>';
        }
    }
  
    //Fonction qui modifie les departements
    public function modifUsers($modif) {
      $data = null;

      $query = "SELECT * FROM users WHERE id = '$modif'";

      $stmt=$this->pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetch();

      return $data;
    }

    //fonction de mise a jour Utilisateurs
    public function majUsers($data) {
      $query = "UPDATE users SET nom = '$data[nom]', prenom = '$data[prenom]', email = '$data[email]' WHERE id = '$data[id]'";
      $sql = $this->pdo->prepare($query);

      if ($sql->execute()) 
      {
        echo '<div class="alert alert-success" role="alert">Utilisatuer modifier avec succes</div>
        <script>$("#exampleModalMaj").modal("hide")</script>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Modification echoue </div>';
      }
    }
}