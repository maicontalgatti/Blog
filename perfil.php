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

<?php
    include("db.php");
    include("mostrarerros.php"); 
    $sql = "SELECT id, email, senha, nome, datanascimento FROM blog.usuario WHERE id = 50";
$result = $conn->query($sql); 

if ($result->num_rows > 0) { $row = $result->fetch_assoc()?>
<img src="usuário sem foto.png" alt="Image" height="102" width="102">
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







?>
</div>

</html>