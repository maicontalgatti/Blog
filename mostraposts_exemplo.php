<?php
include("db.php");
include("mostrarerros.php");

$sql = "SELECT id, idusuario, titulo, texto, nomeusuario FROM blog.posts;";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<div>" . $row["nomeusuario"] . " - ".$row["titulo"]."</div>";
        echo "<div>" . $row["texto"] . "</div>";
        echo "</div>";
    }
    echo "</table>";
} else {
    echo "Não há resultados.";
}
// Fecha a conexão com o banco de dados
$conn->close();
