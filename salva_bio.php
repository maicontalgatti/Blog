<?php 

/*$user = "maicon";
$senha = "focoforcaefe";
$endereco = "52.67.79.110";
$banco = "blog";

$conn = mysqli_connect($endereco, $user, $senha, $banco);*/

include("db.php");
include("mostrarerros.php");
session_start();
$biografia = $_POST['textbio'];
echo $biografia;
$user = $_SESSION['idusuario'];
$result_usuario= "UPDATE blog.usuario SET bio='".$biografia."' WHERE id=".$user."";
$resultado_usuario = mysqli_query($conn, $result_usuario);
?>