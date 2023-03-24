<?php 
include("db.php");
include("mostrarerros.php");

$nome = $_POST['nome'];
$email = $_POST['email']; 
$password = $_POST['senha'];
$datanascimento = $_POST['data']; 
$password = md5($password);
if ($conn) {
    $sql = "INSERT INTO blog.usuario  (email, senha, nome, datanascimento) VALUES('".$email."', '".$password."', '".$nome."', '".$datanascimento."')";
    $query = mysqli_query($conn, $sql);
    echo 'cadastrado';
    Header('Location: login.php?sucess=cadastrado');
} else {
    echo "errou <br>";
    Header('Location: processa_cadastra_usuario.php?erro=erro');
}
