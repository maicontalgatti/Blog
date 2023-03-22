<!doctype html>
<html lang="pt">
<!-- https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="Maicon,Mauricio e Leonardo">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles personal -->
    <link href="css/index.css" rel="stylesheet">
    <style>
        .border {
            border: black solid 1px;
        }

        .display {
            display: flex !important;
        }

        .barraesquerda {
            width: 25%;
            margin: 7px;
            border-radius: 5px;
        }

        .feed {
            width: 75%;
            margin: 7px;
        }

        #main {
            border-radius: 7px;
        }
    </style>

</head>

<body>
    <main>
        <!-- esexmplo de como fazer um botão chamar uma função js -->
        <button onclick="teste()">Teste</button>


        <!-- todo conteudo do blog ficara dentro da tag DIV -->
        <div class="border display" id='main'>


            <!-- coluna esquerda (botões de postar, etc) -->

            <?php
            include 'barra_lateral.php';
            include 'feed.php';
            ?>
        </div>
    </main>
    <!-- Dependências -->
    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>