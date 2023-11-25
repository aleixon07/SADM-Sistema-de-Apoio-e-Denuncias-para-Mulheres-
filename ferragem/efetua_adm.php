<?php
session_start();

$_SESSION['nome'] = $_POST ['nome'];
$_SESSION['email'] = $_POST ['email'];
$_SESSION['senha'] = $_POST ['senha'];

header("location: lista_adm.php");
?>