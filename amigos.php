<html>

<div class="feed border">

    <?php
    include("db.php");
    include("mostrarerros.php");

    $sql = "SELECT id, email, senha, nome, datanascimento, foto_usuario FROM blog.usuario";
    $result = $conn->query($sql);
    // Verifica se há resultados
 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
            <div class="postagem border card-body d-flex flex-column align-items-start"> 
            <h4 class="mb-0">
                 ' . $row['nome'] . ' - ' . $row['email'] . '
               </h4>
              <!--<p class="card-text mb-auto"></p>-->
                </div> ';
        }
    } else {
        echo "Não há resultados.";
    }
    // Fecha a conexão com o banco de dados
    $conn->close();

    ?>

 

</div>

</html>