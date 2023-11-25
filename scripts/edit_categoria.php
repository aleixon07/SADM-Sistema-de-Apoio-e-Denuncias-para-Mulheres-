<?php

include_once "connection.php";

$categoria = $_POST['nome'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];


$sql = "UPDATE categoria SET nome = '$categoria', descricao = '$descricao' WHERE idcategoria = '$id' ";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/cat_denuncia.php?alert=eccbc87e4b5ce2fe28308fd9f2a7baf3");
    exit();
}

?>