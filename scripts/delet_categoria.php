<?php

include_once "connection.php";

$id = $_GET['id'];


$sql_busc = "SELECT * FROM denuncia WHERE tipo_incidente = '$id'";
$result_busc = mysqli_query($conn, $sql_busc);

if(mysqli_num_rows($result_busc) > 0){
    header("Location: ../area_admin/pag/cat_denuncia.php?alert=a87ff679a2f3e71d9181a67b7542122c");
    exit();
}

$sql = "DELETE FROM categoria WHERE idcategoria = '$id'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/cat_denuncia.php?alert=c81e728d9d4c2f636f067f89cc14862c");
    exit(); 
}
?>