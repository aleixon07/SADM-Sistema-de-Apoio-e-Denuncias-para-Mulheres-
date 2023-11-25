<?php

include_once "connection.php";

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$senha2 = md5($senha);

$sql_v = "SELECT * FROM administrador WHERE email = '$email'";
$result_v = mysqli_query($conn,$sql_v);

if(mysqli_num_rows($result_v) > 0){
    header("Location: ../area_admin/pag/administradores.php?alert=e4da3b7fbbce2345d7772b0674a318d5");
    exit();
}

$sql = "INSERT INTO administrador (nome, email, senha) VALUES ('$nome', '$email', '$senha2')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: ../area_admin/pag/administradores.php?alert=c4ca4238a0b923820dcc509a6f75849b");
    exit();
}

?>