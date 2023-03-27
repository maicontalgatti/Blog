function uploadImage(){
    if(!empty($_FILES['arquivo']['name'])){
            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type'];
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];
            $tamanho = $_FILES['arquivo']['size'];
            $erros = array();}

            $tamanoMaximo = 1024 * 1024 * 5;
            if($tamanho > $tamanoMaximo){
                $erros[] = "Seu arquivo excede o tamanho(Permitido 5MB)<br>";
            }
            $aquivosPermitidos = ["png", "jpg", "jpeg"];
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
            if(!in_array($extensao, $aquivosPermitidos)){
                $erros[] = "Arquivo não permitido (Permitido somente:PNG, JPG, JPEG)<br>";
            }
            $typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
            if (!in_array($tipo, $typesPermitidos)){
                $erros[] = "Tipo de arquivo não permitido<br>";
            }
            if(!empty($eeros)){
                foreach($erros as $erro){
                    echo $erro;
                }

            }else{
                
                $caminho = "uploads/";
                if(move_uploaded_file($nomeTemporario, $caminho.$nomeArquivo)){
                    echo "Upload feito com sucesso";
                }
                else{
                    echo"Erro ao enviar"; 
                }

    }
}