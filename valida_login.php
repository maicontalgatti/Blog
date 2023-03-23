<?php 
include("db.php");
include("mostrarerros.php");

$nome = $_POST['email'];
$senha = $_POST['password']; 
if ($conn) {
    echo '<p>Entrou no if</p>';
    $query = mysqli_query($conn, "select * from usuario where email='".$nome."' and senha='".$senha."' ");   
    if (mysqli_num_rows($query) > 0) { 
       echo "Login bem sucedido!"; 
       Header('Location: initial_page.php');
    } else {
        //O login falhou
        echo "Usuário ou senha inválidos!";
        Header('Location: login.php?erro=senhaincorreta');
    }
} else {
    echo "errou <br>";
}
