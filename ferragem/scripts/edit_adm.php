<?php
session_start();
include "connection.php";

unset(
    $_SESSION['edit_idadministrador'],
    $_SESSION['nome'],
    $_SESSION['email'],
    $_SESSION['senha']
);

if (isset($_SESSION['email'])) {
    if (isset($_GET['idadministrador'])) {
        $edit_id = $_GET['idadministrador'];
        if (!empty($edit_id)) {
            $sql = "SELECT * FROM administrador WHERE idadministrador='$edit_id' LIMIT 1";
            try {
                $result = mysqli_query($conn, $sql); //faz a consulta
            } catch (Exception $e) {
                header("Location: ../index.php?error=Erro ao editar o usuário"); //no erro redireciona
                exit();
            }
            if (mysqli_num_rows($result) === 1) { //se encontrou alguém edita
                $user = mysqli_fetch_assoc($result); //armazena em um array associativo
                //salva os dados na sessão para serem chamados no form
                $_SESSION['edit_idministrador']=$edit_id; 
                $_SESSION['nome'] = $user['nome'];             
                $_SESSION['email'] = $email['email']; 
                $_SESSION['senha'] = $email['senha'];                             

                header("Location:  ../views/form_login.php"); //redireciona para o formulário
                exit();
            } else {
                header("Location: ../index.php?error=usuário não encontrado"); //erro na id
                exit();
            }
        }
    } else {
        header("Location: ../index.php?error=id não encontrada");//erro na id
        exit();
    }
} else {
    header("Location: ../index.php?error=login necessário");
    exit();
}
