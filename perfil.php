<html>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">-->
<?php
include("db.php");
include("mostrarerros.php");
?>

<div class="feed border">
<form  class="frmupload" action="" method="post" enctype="multipart/form-data">
       <label class="lblupload" for="file" >Selecione uma foto de perfil</label>
        <input id="file"  type="file" name="arquivo">
        <input class="inputimg" type="submit" name="enviar">


    <!--<form method="post" action="salva_bio.php">
        <textarea name="Biografia"></textarea>
        <input type="submit" value="Salvar">
    </form>-->
 

   <!-- <form  class="frmupload" action="" method="post" enctype="multipart/form-data">
       <label class="lblupload" style="color:#787878">Selecione uma foto de perfil</label>
        <input  type="file" name="arquivo">
        <input class="inputimg" type="submit" name="enviar">
    </form>-->

    <?php
    if (isset($_POST['enviar'])) {
        //print_r($_FILES);
        if (!empty($_FILES['arquivo']['name'])) {
            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type'];
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];
            $tamanho = $_FILES['arquivo']['size'];
            $erros = array();

            $tamanoMaximo = 1024 * 1024 * 5;
            if ($tamanho > $tamanoMaximo) {
                $erros[] = "Seu arquivo excede o tamanho(Permitido 5MB)<br>";
            }
        }
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo $erro;
            }
        } else {

            $caminho = "uploads/";
            if (move_uploaded_file($nomeTemporario, $caminho . $nomeArquivo)) {
                //echo "Upload feito com sucesso";
                
                if ($conn) {
                    $sql = "UPDATE usuario SET foto_usuario = '".$nomeArquivo."' WHERE id=".$_SESSION['idusuario']." ";
                    $query = mysqli_query($conn, $sql);  
                } else {
                    echo "não salvo no Banco <br>"; 
                }



            } else {
                echo "Erro ao enviar";
            }
        }
    }


    ?>
    

    <?php
    $sql = "SELECT id, email, senha, nome, datanascimento, foto_usuario, bio FROM blog.usuario WHERE id = ".$_SESSION['idusuario']."";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc() ;
        // <!--<img src="usuário sem foto.png" alt="Image" height="102" width="102"> 16:30-->

       echo '<img class="imgp"src="uploads/'.$row['foto_usuario'].'" >
        <h1 class="titlename" style: >'.$row['nome'].'</h1>
      <h1 class="titlename" style: >'.$row['bio'].'</h1>
        <h1 class="title1"> E-mail: '. $row['email'].'</h1>
        <h1 class="title2">Data de Nascimento: '.$row['datanascimento'].'</h1>';
    } else {
        echo "Não há resultados.";
    }
    $conn->close();

    //aqui vc pode puxar dados do banco pra ca
    // use esse SQL: SELECT id, email, senha, nome, datanascimento FROM blog.usuario WHERE id = 50;
    //deixei um exemplo de select no aquivo "examples_db"


    //echo '<p style="color:white">Aba de perfil</p>';
    function updateImagem($conn)
    {
        $imagem = !empty($_FILES['imagem']['name']) ? $_FILES['imagem']['name'] : "";
        if (!empty($imagem)) {
            $caminho = "uploads/";
            $imagem = uploadImage($caminho);
        }
        $sql = "INSERT INTO blog.usuario (foto_usuario) VALUES ($imagem)";
        $executar = mysqli_query($conn, $sql);
        if ($executar) {
            header("location: perfil.php");
        } else {
            echo "Algo deu errado";
        }
    }

    function uploadImage($caminho)
    {
        if (!empty($_FILES['imagem']['name'])) {
            $nomeImagem = $_FILES['imagem']['name'];

            $nomeTemporario = $_FILES['imagem']['tmp_name'];
            $tamanho = $_FILES['imagem']['size'];
            $erros = array();

            $tamanoMaximo = 1024 * 1024 * 5;
            if ($tamanho > $tamanoMaximo) {
                $erros[] = "Seu arquivo excede o tamanho(Permitido 5MB)<br>";
            }
        }
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo $erro;
            }
        } else {

            $caminho = "uploads/";
            if (move_uploaded_file($nomeTemporario, $caminho . $nomeImagem)) {
               // echo "Upload feito com sucesso";
            } else {
                echo "Erro ao enviar";
            }
        }
    }
    

    

    ?>
    
    
    
<!-- Registro de uma gambiarra de iniciante
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br> -->

</form>
<form class="frmbio" method="post">

    
    <textarea type="text" name="textbio" id="txtbio" placeholder="Insira sua Biografia"></textarea>
    <input class="inputbio" type="submit" name="Salvar">

   


</form>

</div>


</html>