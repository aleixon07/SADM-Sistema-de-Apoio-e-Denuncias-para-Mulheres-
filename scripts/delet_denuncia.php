<?php

include_once "connection.php";

$id = $_GET['id'];

$sql_c = "SELECT * FROM denuncia WHERE iddenuncia = '$id'";
$result_c = mysqli_query($conn,$sql_c);

$row = mysqli_fetch_assoc($result_c);

if(!empty($row['evidencia'])){
    $nome_arquivo = '../evidencias/'.$row['evidencia'];

if (file_exists($nome_arquivo)) {
    if (unlink($nome_arquivo)) {
        echo 'O arquivo foi excluído com sucesso.';
    } else {
        echo 'O arquivo não pôde ser excluído.';
    }
} else {
    echo 'O arquivo não existe.';
}
}

$sql = "DELETE FROM denuncia WHERE iddenuncia = '$id'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/index.php?alert=c81e728d9d4c2f636f067f89cc14862c");
    exit(); 
}
?>