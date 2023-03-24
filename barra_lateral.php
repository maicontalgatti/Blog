<html>

<div class="display barraesquerda border" style='display:block!important;padding:15px'>

    <div>
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id='btn-postagem'>Publicar</button>
    </div>
    <br>
    <div>
        <button type="button" class="btn" onclick="sair()">Sair</button>
    </div>

    <br>
    <div>
        <button type="button" class="btn" onclick="perfil()">Perfil</button>
    </div>




</div>
<script>
    function sair() {
        window.location.href = "login.php";
    }
    function perfil() {
        window.location.href = "initial_page.php?modulo=perfil";
    }
</script>

</html>