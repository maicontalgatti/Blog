<?php 
include("db.php");
include("mostrarerros.php");

$nome = 'admin';//$_POST['admin']; 
$titulo = $_POST['titulo'];
$texto = $_POST['texto']; 

if ($conn) {
    $sql = "INSERT INTO blog.posts (idusuario, titulo, texto, nomeusuario) VALUES(50, '".$titulo."', '".$titulo."', '".$nome."')";
    $query = mysqli_query($conn, $sql);
    // echo 'initial_page.php';
    Header('Location: initial_page.php');
} else {
    echo "errou <br>"; 
}
