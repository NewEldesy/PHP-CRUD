<?php
include('conf.php');

$pdo = new Config_db();
$rows = $pdo->affUsers();
?>

<div class="col-md-12 order-md-1">
   <h5 class="mb-5">Liste des Departements</h5>
   <div class="table-responsive">
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th>#</th>
               <th>Nom (s)</th>
               <th>Preom (s)</th>
               <th>Email</th>
               <th>Options</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $i = 1;
               if (!empty($rows)) {
                  foreach ($rows as $row) {
            ?>
            <tr>
               <td><?php echo $i++; ?></td>
               <td><?= $row['nom']; ?></td>
               <td><?= $row['prenom']; ?></td>
               <td><?= $row['email']; ?></td>
               <td>
                  <a href="#" id="btn_del" value="<?php echo $row['id'];?>" class="badge badge-danger badge-pill">
                  Supprimer</a>
                  <a href="#" id="btn_update" data-toggle="modal" data-target="#exampleModalMaj" value="<?php echo $row['id'];?>" class="badge badge-warning badge-pill">
                  Modifier</a>
               </td>
            </tr>
            <?php
                  }
               } else {
                  echo '<div class="alert alert-warning" role="alert">
                           Pas de donnees disponible</div>';
               }
            ?>
         </tbody>
      </table>
   </div>
</div>