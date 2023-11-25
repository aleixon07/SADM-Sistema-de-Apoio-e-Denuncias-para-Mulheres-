<?php

include_once "connection.php";

$categoria = $_POST['nome'];
$descricao = $_POST['descricao'];


$sql = "INSERT INTO categoria (nome, descricao) VALUES ('$categoria', '$descricao')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/cat_denuncia.php?alert=c4ca4238a0b923820dcc509a6f75849b");
    exit();
}

?>