<html>

<div id="wrapper" class="feed border">
    <header class="user info">
        <h1>Usuário</h1>

    </header>


   
<!-- monta tudo dentro daqui.
isso é só um módulo funcionando da mesma maneira que o arquivo 'feed'.
qualquer regra de CSS inserida na initial page vai valer aqui tmb.
se ver bem, eu coloquei um IF no initial_page  --> 
<?php
    include("db.php");
    include("mostrarerros.php"); 
  
//aqui vc pode puxar dados do banco pra ca
// use esse SQL: SELECT id, email, senha, nome, datanascimento FROM blog.usuario WHERE id = 50;
//deixei um exemplo de select no aquivo "examples_db"


echo '<p style="color:white">Aba de perfil</p>';







?>
</div>

</html>