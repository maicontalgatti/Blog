<?php
include("db.php");
include("mostrarerros.php");

$adicionado = $_POST['adicionado'];
$solicitante = $_POST['solicitante'];

if ($conn) {
    $sql = "INSERT INTO blog.amizade (idusuario1, idusuario2, solicitante, status_amizade) VALUES(".$adicionado.", ".$solicitante.", ".$solicitante.", 'f');";
    $query = mysqli_query($conn, $sql);
    echo 'foi <br>';
    echo "INSERT INTO blog.amizade (idusuario1, idusuario2, solicitante, status_amizade) VALUES(".$adicionado.", ".$solicitante.", ".$solicitante.", 'f');";

    // Header('Location: admin_logado.php');
} else {
    echo "errou <br>";
    // Header('Location: admin.php?erro=dbproblem');
}
