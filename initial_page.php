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
        .display {
            display: block;
        }

        .titulopost {
            height: 20px;
        }

        .textopost {
            margin-top: 5px;
            height: 40px;
        }

        /*estilo de botões*/
        .btn {
            border: none;
            padding: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: .3s;
            border-radius: 5px;
            background: #787878;
            ;
            position: relative;
            left: 82px;
            top: 20px;
            border-radius: 1px;
            width: 400px;
            height: 40px;
            color: white;

        }

        .btn2 {
            border: none;
            padding: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: .3s;
            border-radius: 5px;
            background: #787878;
            position: relative;
            left: -78px;
            top: 70px;
            border-radius: 1px;
            width: 400px;
            height: 40px;
            color: white;


        }

        .btn:hover {
            background: #5a5a5a;
        }

        .btn2:hover {
            background: #5a5a5a;
        }

        /*fim do estilo de botões*/

        .border {
            border: black solid 1px;
        }

        .display {
            display: flex !important;
            width: -300px;
            height: 900px;
            background-color: #5a5a5a;
        }

        .barraesquerda {
            width: 25%;
            margin: 7px;
            height: 100%;
            border-radius: 5px;
            background-color: #3c3c3c;
        }

        .feed {
            width: 75%;
            margin: 7px;
            border-radius: 5px;
            background-color: #3c3c3c;
            height: 100%;
            position:relative;
            padding-top: 15px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .postagem {
            padding: 10px;
            text-decoration: none;
            cursor: pointer;
            transition: .3s;
            border-radius: 5px;
            background: #787878;
            position: relative;
            /* left: 30px; */
            /* right: 30px; */
            /* top: 20px; */
            margin: 0px;
            border-radius: 1px;
            width: 95%;
            height: 70px;
            color: white;
        }

        #main {
            border-radius: 7px;
        }
    </style>

</head>

<body>
    <main>
        <!-- esexmplo de como fazer um botão chamar uma função js -->



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