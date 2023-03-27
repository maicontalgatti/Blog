<html>

<div  class="feed border">
  

   
<!-- monta tudo dentro daqui.
isso é só um módulo funcionando da mesma maneira que o arquivo 'feed'.
qualquer regra de CSS inserida na initial page vai valer aqui tmb.
se ver bem, eu coloquei um IF no initial_page  --> 
<!--<style>
    .title{
        color:#787878 ;

    }
</style>-->

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar">
</form>

<?php
    if(isset($_POST['enviar'])){
        //print_r($_FILES);
        if(!empty($_FILES['arquivo']['name'])){
            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type'];
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];
            $tamanho = $_FILES['arquivo']['size'];
            $erros = array();

            $tamanoMaximo = 1024 * 1024 * 5;
            if($tamanho > $tamanoMaximo){
                $erros[] = "Seu arquivo excede o tamanho(Permitido 5MB)<br>";
            }
            
            
            }
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }

            }else{
                
                $caminho = "uploads/";
                if(move_uploaded_file($nomeTemporario, $caminho.$nomeArquivo)){
                    echo "Upload feito com sucesso";
                }
                else{
                    echo"Erro ao enviar"; 
                }

    }}


?>
<?php
    include("db.php");
    include("mostrarerros.php"); 
    $sql = "SELECT id, email, senha, nome, datanascimento, foto_usuario FROM blog.usuario WHERE id = 50";
$result = $conn->query($sql); 

if ($result->num_rows > 0) { $row = $result->fetch_assoc()?>
<!-- Selecionar imagem de perfil-->

<!--<img src="usuário sem foto.png" alt="Image" height="102" width="102"> 16:30-->
<img src="uploads/<?php echo $row['foto_usuario'];?>">
<h1 class="title" >Nome de Usuário: <?php echo $row['nome'];?></h1>
<h1 class="title"  > E-mail: <?php echo $row['email'];?></h1>
<h1 class="title" >Data de Nascimento: <?php echo $row['datanascimento'];?></h1>



<?php
}else{
    echo "Não há resultados.";
}
$conn->close();




  
//aqui vc pode puxar dados do banco pra ca
// use esse SQL: SELECT id, email, senha, nome, datanascimento FROM blog.usuario WHERE id = 50;
//deixei um exemplo de select no aquivo "examples_db"


//echo '<p style="color:white">Aba de perfil</p>';
function updateImagem($conn){
    $imagem = !empty($_FILES['imagem']['name'])? $_FILES['imagem']['name']:"";
    if (!empty($imagem)){
        $caminho = "uploads/";
        $imagem = uploadImage($caminho);
    }
    $sql = "INSERT INTO blog.usuario (foto_usuario) VALUES ($imagem)";
    $executar = mysqli_query($conn, $sql);
    if($executar){
        header("location: perfil.php");
    }else{
        echo "Algo deu errado";
    }


}

function uploadImage($caminho){
    if(!empty($_FILES['imagem']['name'])){
        $nomeImagem = $_FILES['imagem']['name'];
        
        $nomeTemporario = $_FILES['imagem']['tmp_name'];
        $tamanho = $_FILES['imagem']['size'];
        $erros = array();

        $tamanoMaximo = 1024 * 1024 * 5;
        if($tamanho > $tamanoMaximo){
            $erros[] = "Seu arquivo excede o tamanho(Permitido 5MB)<br>";
        }
        
        
        }
        if(!empty($erros)){
            foreach($erros as $erro){
                echo $erro;
            }

        }else{
            
            $caminho = "uploads/";
            if(move_uploaded_file($nomeTemporario, $caminho.$nomeImagem)){
                echo "Upload feito com sucesso";
            }
            else{
                echo"Erro ao enviar"; 
            }

}}

?>



</div>


</html>