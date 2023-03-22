<?php

//pode criar um arquivo chamado "Db.php" e depois só importa-lo na pagina
$user = "";
$senha = "";
$endereco = "";
$banco = "";
$conn = mysqli_connect($endereco, $user, $senha, $banco);


//pagina que fará a consulta:


//exemplo de pagina de validação de login (select):


include("db.php"); 

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($conn) {
    $query = mysqli_query($conn, "select * from user where nome='".$nome."' and senha='".$senha."' ");  
if (mysqli_num_rows($query) > 0) {
        //O login foi bem sucedido
       echo "Login bem sucedido!";

       Header('Location: logado.php');
    } else {
        //O login falhou
        echo "Usuário ou senha inválidos!";
        Header('Location: login.php');
    }
} else {
    echo "errou <br>";
}
// Fecha a conexão com o banco de dados
$conn->close();
//fim

/**
 * 
 * 
 * 
 * 
 */

//pagina para listar resultados de um slect
include("db.php"); 
        $sql = "SELECT nome, codigo FROM escolas";
        $result = $conn->query($sql);

        // Verifica se há resultados
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr>"; 
          echo "<th>escola</th>";
          echo "<th>codigo</th>";
          echo "</tr>";
          // Loop para percorrer os resultados e exibi-los na tabela
          //essa é a parte que exibe os resultados
          while ($row = $result->fetch_assoc()) {
            echo "<tr>"; 
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>".$row["codigo"] ."</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "Não há resultados.";
        }
        // Fecha a conexão com o banco de dados
        $conn->close();
//fim

/**
 * 
 * 
 * 
 * 
 */

//exemplo de insert
include("db.php"); 

$escola = $_POST['escola'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

if ($conn) {
    $sql = "INSERT INTO teste_vocacional.escola_tv (nome, cidade, estado, codigo) VALUES('".$escola."', '".$cidade."', '".$estado."', '".$codigo."')";
    $query = mysqli_query($conn, $sql);
    // echo 'foi <br>';
    // echo "SQL INSERT INTO teste_vocacional.escola_tv (nome, cidade, estado, codigo) VALUES('".$escola."', '".$cidade."', '".$estado."', '".$codigo."')";
    
    Header('Location: admin_logado.php');
} else {
    echo "errou <br>";
    Header('Location: admin.php?erro=dbproblem');
}
