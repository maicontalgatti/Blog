<html>

<div class="feed border">

    <?php
    include("db.php");
    include("mostrarerros.php");

    $sql = "SELECT id, idusuario, titulo, texto, nomeusuario FROM blog.posts order by id DESC";
    $result = $conn->query($sql);
    // Verifica se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
            <div class="postagem border">
                <div class="titulopost border">
                <p style="margin:0px"> ' . $row['nomeusuario'] . ' - ' . $row['titulo'] . ' </p> 
                </div>
                <div class="textopost border">
                    <p style="margin:0px">' . $row['texto'] . '</p>
                </div>
            </div>
            <br>';
        } 
    } else {
        echo "Não há resultados.";
    }
    // Fecha a conexão com o banco de dados
    $conn->close();

    ?>



</div>

</html>