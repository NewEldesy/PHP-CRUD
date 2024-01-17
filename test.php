<button value="1" id="btn_del">Cliquez-moi</button>

<script src="Assets/Js/jquery-3.6.0.min.js"></script>
<script>
    function supUsers() {
        $(document).on("click", "#btn_del", function(e) {
            var id = $(this).attr("value");
            console.log(id);
        });
    }
    supUsers();
</script>