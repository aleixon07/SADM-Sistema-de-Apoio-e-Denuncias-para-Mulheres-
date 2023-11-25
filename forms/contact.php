<?php
include "../conexao.php";
$nome_vitima = $_POST['nome_vitima'];
$endereco_vitima = $_POST['endereco_vitima'];
$denuncias = $_POST['denuncias'];

$insere = "INSERT INTO denuncia(iddenuncia,nome_vitima, endereco_vitima, denuncias) VALUES ('NULL','$nome_vitima','$endereco_vitima','$denuncias')";

$sql = mysqli_query($conexao,$insere);

if ($sql){
echo"dados inseridos com sucesso";
}else{
echo"erro ao cadastrar";
}
?>

