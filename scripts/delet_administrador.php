<?php

session_start();

include_once "connection.php";

$id = $_GET['id'];

$id_session = $_SESSION['idusuario'];

if($id == $id_session){
    header("Location: ../area_admin/pag/administradores.php?alert=a87ff679a2f3e71d9181a67b7542122c");
    exit(); 

}

$sql = "DELETE FROM administrador WHERE idadministrador = '$id'";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/administradores.php?alert=c81e728d9d4c2f636f067f89cc14862c");
    exit(); 
}
?>