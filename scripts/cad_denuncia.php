<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "connection.php";
    // Recolhe os dados do formulário
    $nome = $_POST["nome"];
    $contato = $_POST["contato"];
    $data_hora = $_POST["data_hora"];
    $local = $_POST["local"];
    $descricao = $_POST["descricao"];
    $tipo_incidente = $_POST["tipo_incidente"];
    $nome_agressor = $_POST["nome_agressor"];
    $descricao_agressor = $_POST["descricao_agressor"];
    $testemunhas = $_POST["testemunhas"];
    $relacao = $_POST["relacao"];
    $data_envio = date('y-m-d');

    // Trate os campos opcionais que podem vir vazios
    if (empty($nome)) {
        $nome = null;
    }
    if (empty($contato)) {
        $contato = null;
    }
    if (empty($nome_agressor)) {
        $nome_agressor = null;
    }
    if (empty($descricao_agressor)) {
        $descricao_agressor = null;
    }
    if (empty($testemunhas)) {
        $testemunhas = null;
    }
    if (empty($relacao)) {
        $relacao = null;
    }

    // Verifique se um arquivo de evidencia foi enviado
    if (isset($_FILES['evidencias']) && $_FILES['evidencias']['error'] === UPLOAD_ERR_OK) {
        // Diretório onde os arquivos serão armazenados
        $upload_directory = '../evidencias/';
        
        // Nome único para o arquivo
        $file_name = uniqid() . '_' . $_FILES['evidencias']['name'];
        $file_path = $upload_directory . $file_name;

        // Verifique o tipo de arquivo
        $allowed_extensions = array(
            'pdf', 'jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff', 'doc', 'docx', 'txt',
            'mp3', 'wav', 'flac', 'ogg', 'aac',
            'mp4', 'avi', 'mkv', 'mov', 'wmv', 'flv',
            'zip', 'rar', '7z',
            'csv', 'xls', 'xlsx', 'ods',
            'ppt', 'pptx', 'odp',
            'html', 'htm', 'xml', 'json'
        );
        
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

        if (in_array(strtolower($file_extension), $allowed_extensions)) {
            // Move o arquivo para o diretório de upload
            if (move_uploaded_file($_FILES['evidencias']['tmp_name'], $file_path)) {
                // Arquivo foi carregado com sucesso
                // Agora você pode usá-lo no banco de dados ou em qualquer outro lugar
                // Insira o $file_path no banco de dados ou faça o que for necessário
            } else {
                echo "Erro ao fazer upload do arquivo.";
            }
        } else {
            echo "Tipo de arquivo não suportado. Apenas PDF, imagens, áudio e vídeo são permitidos.";
        }
    }else{
        echo "a";
    }

    // Insira os dados na tabela de denúncias (substitua 'denuncia' com o nome correto da tabela)
    $sql = "INSERT INTO denuncia (nome_denuciante, info_contato, data_hora, local_ocorrencia, descricao_incidente, tipo_incidente, nome_agressor, detalhe_agressor, testemunhas, evidencia, relacao_agressor, data_envio)
    VALUES ('$nome', '$contato', '$data_hora', '$local', '$descricao', '$tipo_incidente', '$nome_agressor', '$descricao_agressor', '$testemunhas', '$file_name', '$relacao', '$data_envio')";

   $result = mysqli_query($conn, $sql);

   if($result){
    
        header("Location: ../index.php?alert=c4ca4238a0b923820dcc509a6f75849b");
        exit();

   }else{
    echo "a";
   }


}else{
    echo "b";
}
?>