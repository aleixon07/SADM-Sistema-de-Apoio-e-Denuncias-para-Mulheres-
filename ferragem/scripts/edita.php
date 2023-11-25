<?php

session_start(); //verifica a sessão

include "connection.php";

if (isset($_SESSION['email'])) { //esse cadastro é feito quando o usuário está logado
 if(isset($_SESSION['idadministrador'])){
    $nome = htmlspecialchars($_POST['nome']); //armazena os demais campos
    $email = htmlspecialchars($_POST['email']);

    $id = $_SESSION['ididadministrador'];
    //update é a consulta de alteração
    $sql = "UPDATE user SET
                
                nome ='$nome',
                email ='$email',
               
                WHERE  iduser = '$id'
                ";
    try { //try-catch é usado no tratamento de exceções
        $result = mysqli_query($conn, $sql); //faz a consulta no banco, inserindo os dados
    }catch (Exception $e) {
        echo "$e";
        //header("Location: ../views/edit_form.php?error=Erro ao inserir dados editados"); //de houver erro na consulta redireciona com uma msg por GET
        exit();
    }
    //limpa os dados da variável de sessão
    unset(
        $_SESSION['edit_id'],
        $_SESSION['nome'],
        $_SESSION['email']
    );

    header("Location: ../index.php"); //se tudo der certo volta para página inicial
    exit();
 }else{
    header("Location: ../views/edit_user.php?error=Edit_id faltando"); //de houver erro na consulta redireciona com uma msg por GET
    exit();
 }
} else {
    header('Location: ../views/login_form.php'); //se o usuário não estiver logado redireciona para a tela do login
    exit();
}