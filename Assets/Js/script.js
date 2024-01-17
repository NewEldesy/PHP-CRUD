//Afficher Utilisateurs
function affUsers(){
    $.ajax({
        url: "read_user.php",
        type: "post",
        success:function(data)
        {
            $("#affUsers").html(data).delay(500).slideDown(500);
        }
    });
}
affUsers();

//Ajouter utilisateurs
$(document).on('click', '#btn_add', function(e){
    //On annule la fonction par defaut du bouton enregistrer
    e.preventDefault();
    //creation d'une variable lib_departement
    var btn_add = $("#btn_add").val();
    var nom = $("#user_nom").val();
    var prenom = $("#user_prenom").val();
    var email = $("#user_email").val();
    $.ajax({
            url: "add_user.php",
            type: "post",
            data: {
                btn_add:btn_add,
                nom:nom,
                prenom:prenom,
                email:email
            },
            success:function(data){
                $("#result").html(data).delay(700).slideDown(700);
                affUsers();
                $("#result").delay(700).slideUp(700);
            }
        });
    $("#frm_add_user")[0].reset();
});

//Supprimer Utilisateurs
function supUsers() {
    $(document).on("click" , "#btn_del", function(e) {
        e.preventDefault();
        console.log('premier palier');

        if (window.confirm("Voulez-vous supprimer cet Utilisateurs ?")) {
            var id = $(this).attr("value");
            console.log(id);

            $.ajax({
                url:"delete_user.php",
                type:"post",
                data:{
                    id:id
                },
                success:function(data){
                    $("#msg_delete").html(data).delay(700).slideDown(700);
                    $("#msg_delete").delay(700).slideUp(700);
                    affUsers();
                }
            });
        } else {
            return false;
        }
    });
}
supUsers();

//Fonction qui modifier utilisateurs
function updateUsers()
{
    $(document).on("click" , "#btn_update" , function(e)
    {
        e.preventDefault();
        var mod_id = $(this).attr("value");
        
        $.ajax({
            url:"mod_user.php",
            type:"post",
            data:{
                mod_id:mod_id
            },
            success: function(data){
                $("#aff_form_mod").html(data);
            }
        });
    });
}
updateUsers();

//fonction de mise a jour utilisateur
function majUsers() {
    $(document).on("click" , "#btn_maj", function(e) {
        e.preventDefault();

        var id = $("#id_user").val();
        var nom = $("#nom").val();
        var prenom =$("#prenom").val();
        var email =$("#email").val();
        var btn_maj = $("#btn_maj").val();

        $.ajax({
            url:"update_user.php",
            type:"post",
            data:{
                id:id,
                nom:nom,
                prenom:prenom,
                email:email,
                btn_maj:btn_maj
            },
            success:function(data){
                $("#msg_maj").html(data).delay(700).slideDown(700);
                $("#msg_maj").delay(700).slideUp(700);
                affUsers();  
            }
        });
    });
}
majUsers();