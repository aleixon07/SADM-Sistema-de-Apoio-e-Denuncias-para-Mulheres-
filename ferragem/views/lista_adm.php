<?php
session_start();
//localhost/CadFeito/cad.php
//include "efetua_adm.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Administradores</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Lora&display=swap" rel="stylesheet">

    <meta name="author" content="Ane">
</head>
<style>

*{
    font-family: 'Poppins', sans-serif;
}

table, th, tr, td{
    font-size:20px;
    width:20%;
    text-align:center;

}
th{
    background-color:#9acddc;
    border:1px solid black;
    padding:5px;
}
td{
    background-color:white;
    border:1px solid black;
    padding:5px;
}
</style>
<body>
    <table>
<tr>
   <th>Nome</th>
   <th>Email</th>
   <th>Senha</th>
</tr>
<tr>
    
    <td><?php echo $_SESSION['nome']?></td>
    <td><?php echo $_SESSION['email']?></td>
    <td><?php echo $_SESSION['senha']?></td>
    
</tr>


    </table>
</body>
</html>

<!--localhost/cadfeito/lista_adm.php
-->



