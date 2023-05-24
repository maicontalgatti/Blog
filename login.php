<!DOCTYPE html>
<html lang="pt">
<?php 
session_destroy();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Essa referencia é pra estilização externa -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    </link> 
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="login-container">
        <h1>LOGIN</h1>
        <form method="POST" action="valida_login.php">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <!-- <a href="esqueceu_senah.php" id="forgot-pass">Esqueceu a senha?</a> -->
            <input type="submit" value="Login">
        </form>
        <div id="social-container">  
        </div>
        <div id="regiter-container">
            <p> Ainda não tem uma conta?</p>
            <a href="RegistrationEntry.php">Registrar</a>

        </div>

    </div>
</body>  
</html>