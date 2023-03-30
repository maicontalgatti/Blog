<!doctype html>
<html lang="pt"> 

<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="Maicon,Mauricio e Leonardo">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
 
   

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

        /*style do pefil.php*/
        .title {
            color: #787878;

         
        }
        .inputimg{
            top: 300px;
        
        }
       
        
        
        /*
        .inputimg{
            width: 200px;
            
        }*/
            /*fim do estilo perfil.php*/
        

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
            position: relative;
            /* left: 82px; */
            /* top: 20px; */
            border-radius: 1px;
            width: 100%;
            height: 40px;
            color: white;

        }


        .btn:hover {
            background: #5a5a5a;
        }

        .btn2:hover {
            background: #5a5a5a;

        }
        .inputimg:hover{
            background: #5a5a5a;
        
        }
        /* laber for file*/
        input[type="file"]{
            display: none;
        }
        .lblupload:hover{
            background: #5a5a5a;
        }
       
        .lblupload{
            padding: 8px;
            min-width: 250px;
            max-width: 750px;
            background: #787878;
            color: white;
            
            cursor: pointer;
            transition: .3s;
            text-align: center;
        }
        /*fim da label for file*/
        .inputimg{
            text-decoration: none;
            cursor: pointer;
            transition: .3s;
            
            background: #787878;
            
            /* left: 82px; */
            /* top: 20px; */
            
            min-width: 10%;
            height: 40px;
            color: white;
        }

        /*fim do estilo de botões*/

        .border {
            border: black solid 1px;
        }
        .frmupload{
            align-self: flex-end;
            margin-top: 32%;
            margin-left: 53%;
            min-width: 320px 603px ;
            max-width:800px ;  
                      
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
            position: relative;
            padding-top: 15px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .postagem {
            background: #787878;
            margin-bottom: 15px;
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
            if ($_GET['modulo'] == 'perfil') {
                include 'perfil.php';
            } else if ($_GET['modulo'] == 'amigos') {
                include 'amigos.php';
            } else {
                include 'feed.php';
            }

            ?>


        </div>




    </main> <!-- postarrr -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova postagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method='post' action='processa_postagem.php'>
                    <div class="modal-body">

                        <input style='display:none' name='usuario' value=<?php echo $_SESSION['usuario'] ?> type="text" class="form-control">
                        <input style='display:none' name='idusuario' value=<?php echo $_SESSION['idusuario'] ?> type="text" class="form-control">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Título:</label>
                            <input name='titulo' type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Texto:</label>
                            <textarea name='texto' class="form-control" id="message-text"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit">Postar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Dependências -->
    <script src="js/index.js"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slin.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        //modal
        $('#btn-postagem').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal 
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
</body>

</html>