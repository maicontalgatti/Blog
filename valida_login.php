<?php 
include("db.php");
include("mostrarerros.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($conn) {
    $query = mysqli_query($conn, "select * from user_tv where nome='".$nome."' and senha='".$senha."' ");  
if (mysqli_num_rows($query) > 0) {
        //O login foi bem sucedido
       echo "Login bem sucedido!";

       Header('Location: admin_logado.php');
    } else {
        //O login falhou
        echo "Usuário ou senha inválidos!";
        Header('Location: admin.php?erro=senhaincorreta');
    }
} else {
    echo "errou <br>";
}



?>