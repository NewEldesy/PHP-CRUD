<?php
include ("conf.php");

$modif = $_POST['mod_id'];

$pdo = new Config_db();
$mod = $pdo->modifUsers($modif);

if (!empty($mod)) {
?>
<form id="frm_maj_dptmnt" class="needs-validation" novalidate>
    <div class="row">
        <div class="col-md-12 mb-3">
            <input type="hidden" value="<?php echo $mod['id'] ?>" class="form-control" id="id" placeholder="" required>
            <label for="nom">Nom</label>
            <input type="text" value="<?php echo $mod['nom'] ?>" class="form-control" id="nom" placeholder="" required>
            <br>
            <label for="prenom">Prenom</label>
            <input type="text" value="<?php echo $mod['prenom'] ?>" class="form-control" id="prenom" placeholder="" required>
            <br>
            <label for="email">Email</label>
            <input type="text" value="<?php echo $mod['email'] ?>" class="form-control" id="email" placeholder="" required>
        </div>
    </div>
</form>

<?php
}