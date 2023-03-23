<?php 
include("db.php");
include("mostrarerros.php");

$nome = $_POST['nome'];
$email = $_POST['email']; 
$password = $_POST['password'];
$datanascimento = $_POST['datanascimento']; 

if ($conn) {
    $sql = "INSERT INTO blog.usuario  (email, senha, nome, datanascimento) VALUES('".$email."', '".$password."', '".$password."', '".$datanascimento."')";
    $query = mysqli_query($conn, $sql);
    echo 'cadastrado';
    // Header('Location: login.php?sucess=cadastrado');
} else {
    echo "errou <br>";
    Header('Location: processa_cadastra_usuario.php?erro=erro');
}
