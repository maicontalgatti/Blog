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
            position: relative;
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




    </main> <!-- postarrr -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Dependências -->
    <script src="js/index.js"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        //modal
        $('#btn-postagem').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
</body>

</html>