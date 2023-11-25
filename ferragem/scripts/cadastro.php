<?php

session_start();//verifica a sessão

include "connection.php";


    if (isset($_POST['email']) && isset($_POST['senha'])) { //verifica se os campos obrigatórios estão presentes
        $email = $_POST['email']; //se sim armazena
        $password = $_POST['senha'];
        
        if (empty($email)) { //verifica se o campo contém alguma coisa
            header("Location: ../index.php?error=email é necessário"); //se sim redireciona
            exit();
        } elseif (empty($password)) { //verifica se o campo contém alguma coisa
            header("Location: ../index.php?error=senha é necessário"); //se sim redireciona
            exit();
        
        } else {
            $nome = $_POST['nome']; //armazena os demais campos
          
            

            $hash = password_hash($password, PASSWORD_DEFAULT); //cria um hash da senha informada, esses hash será armazenado no BD, e não a senha
            //cria uma string com o comando de inserção no BD
            $sql = "INSERT INTO administrador (nome,email,senha) VALUES ('$nome','$email','$hash')";

            try { //try-catch é usado no tratamento de exceções
                $result = mysqli_query($conn, $sql); //faz a consulta no banco, inserindo os dados
            } catch (Exception $e) {
                header("Location: ../index.php?error=Erro de comunicação com o banco"); //de houver erro na consulta redireciona com uma msg por GET
                exit();
            }
            header("Location: ../index.php"); //se tudo der certo volta para página inicial
            exit();
        }
    } else {
        header("Location: ../index.php?error=Dados insuficientes"); //se faltaram dador redireciona com uma msg por GET
        exit();
    }

