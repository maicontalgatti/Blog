<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Essa referencia é pra estilização externa -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    </link>
    <!-- aqui falta coloca ro caminho completo: "css/styles.css" -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="login-container">
        <h1>Criar sua conta</h1>
        <form method='post' action="processa_cadastra_usuario.php">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off">
            <label for="nome">Nome</label>
            <input type="nome" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="off">
            <label for="senha">Senha</label>
           
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
           
           <!-- <img class="img2" style="height: 40px; width:40px ;" src="exibir_senha.png">-->
            <label for="data">Data de Nascimento</label>
            <input type="data" name="data" id="data" placeholder="Exemplo 20/10/1996">
            <select name='genero' id=genero>
                <option>Selecione seu Gênero</option>
                <option value='M'>Masculino</option>
                <option value='F'>Feminino</option>
            </select>
            </select>

            </select>

            <input type="submit" value="Registrar">
            <a href="login.php" id="forgot-pass">Já tem conta ? Faça login</a>
            </select>
        </form>
    </div>
    
        

</body>

</html>