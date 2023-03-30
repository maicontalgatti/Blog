<html>

<div class="feed border">

    <?php
    include("db.php");
    include("mostrarerros.php");

    $sql = "SELECT id, email, senha, nome, datanascimento, foto_usuario FROM blog.usuario";
    $result = $conn->query($sql);
    // Verifica se há resultados
    echo '<p hidden="hidden">'.$_SESSION['idusuario'].'</p>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
            <div class="postagem border card-body d-flex flex-column align-items-start"> 
            <h4 class="mb-0"> 
                 ' . $row['nome'] . ' - ' . $row['email'] . '
               </h4>
              <!--<p class="card-text mb-auto"></p>-->
           
            <button id="btn_' . $row['id'] . '"onclick="adicionar_amigo(' . $row['id'] . ')"> Adicionar </button>
                </div> 
                
                ';
        }
    } else {
        echo "Não há resultados.";
    }
    // Fecha a conexão com o banco de dados
    $conn->close();

    ?>



</div>

<script>
    function adicionar_amigo(id_user) {
        id_button = "btn_" + id_user;


        $.ajax({
            url: "ajax_adcamigo.php",
            method: "POST",
            data: {
                user1: p1,
                user2: p2,
                socilitante: <?php echo $_SESSION['idusuario']?>
            },
            success: function(data) {
                location.reload();
            }
        });
        // return true;
        document.getElementById(id_button).innerHTML = 'Solicitação enviada';
    };
</script>


</html>