<?php 
include("db.php");
include("mostrarerros.php");

$nome = $_POST['email'];
$senha = $_POST['password']; 
$senha = md5($senha);

if ($conn) {
    echo '<p>Entrou no if</p>';
    $query = mysqli_query($conn, "select * from usuario where email='".$nome."' and senha='".$senha."' ");   
    if (mysqli_num_rows($query) > 0) { 
       echo "Login bem sucedido!"; 
       session_start();

       $sql = "select * from usuario where email='".$nome."' and senha='".$senha."' ";
       $result = $conn->query($sql); 
       $row = $result->fetch_assoc();
       $_SESSION['usuario'] = $row['nome'];
       $_SESSION['idusuario'] = $row['id'];
       
       Header('Location: initial_page.php?modulo=');
    } else {
        //O login falhou
        echo "Usuário ou senha inválidos!";
        Header('Location: login.php?erro=senhaincorreta');
    }
} else {
    echo "errou <br>";
}
