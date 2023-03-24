<?php 
include("db.php");
include("mostrarerros.php");
session_start();
$usuario = $_POST['usuario']; 
$idusuario = $_POST['idusuario']; 
$titulo = $_POST['titulo'];
$texto = $_POST['texto']; 

if ($conn) {
    $sql = "INSERT INTO blog.posts (idusuario, titulo, texto, nomeusuario) VALUES(".$idusuario.", '".$titulo."', '".$texto."', '".$usuario."')";
    // echo "INSERT INTO blog.posts (idusuario, titulo, texto, nomeusuario) VALUES(".$idusuario.", '".$titulo."', '".$texto."', '".$usuario."')";
    $query = mysqli_query($conn, $sql); 
    Header('Location: initial_page.php');
} else {
    echo "errou <br>"; 
}
