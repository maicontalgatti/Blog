<html>

<div class="feed border">

    <?php
    include("db.php");
    include("mostrarerros.php");
    //sql de milhões
//SELECT * from blog.usuario u inner join amizade a on (u.id = a.idusuario1 ) where u.id = 56 and a.status_amizade = 'v'


    $sql = "SELECT * from blog.usuario u inner join amizade a on (u.id = a.idusuario2 ) where a.solicitante = 56 and a.status_amizade = 'v'";
    $result = $conn->query($sql);
    echo '<p hidden="hidden">' . $_SESSION['idusuario'] . '</p>';
    // Verifica se há resultados 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
            <div class="postagem border card-body d-flex flex-column align-items-start"> 
            <h4 class="mb-0"> 
                 ' . $row['nome'] . ' - ' . $row['email'] . '
               </h4> 
            <button id="btn_' . $row['id'] . '"> Amigos </button>
                </div> 
                
                ';
        }
    } else {
        echo "Não há resultados.";
    } 


    $sql = "SELECT * from blog.usuario u inner join amizade a on (u.id = a.idusuario2 ) where a.solicitante = 56 and a.status_amizade = 'f'";
    $result = $conn->query($sql);
    // Verifica se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '
            <div class="postagem border card-body d-flex flex-column align-items-start"> 
            <h4 class="mb-0"> 
                 ' . $row['nome'] . ' - ' . $row['email'] . '
               </h4> 
            <button id="btn_' . $row['id'] . '"onclick="adicionar_amigo(' . $row['id'] . ')"> Adicionar </button>
                </div> 
                
                ';
        }
    } else {
        echo "Não há resultados.";
    }
    // Fecha a conexão com o banco de dados
    $conn->close();




    
    ?>



</div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
<script>
    function adicionar_amigo(id_user) {
        id_button = "btn_" + id_user;
        id_adicionado = id_user;
        id_solicitante = <?php echo $_SESSION['idusuario'] ?>;
      

        // alert ("id_button é "+id_button+" id_adicionado: "+id_adicionado+" id_solicitante "+id_solicitante);

        $.ajax({
            url: "ajax_adcamigo.php",
            method: "POST",
            data: {
                adicionado: id_adicionado,
                solicitante: id_solicitante
            },
            success: function(data) {
                // location.reload();
                alert("AJAX sucessful");
          document.getElementById(id_button).innerHTML = 'Solicitação enviada';
            }
        });
        return true;
    };
</script>



</html>