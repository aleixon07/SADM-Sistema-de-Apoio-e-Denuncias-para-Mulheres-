<?php
//cadastre-se tem uma função diferente do cadastro, pois permite a inclusão e um usuário apenas verificando o token
include "connection.php"; //importa os dados do arquivo

if (isset($_POST['token'])) { //verifica se o token exixte
    $token = $_POST['token']; //se existe armazena
    if($token==='123456'){ //verifica se o token corresponde ao esperado, nessa caso 123456
        if (isset($_POST['email']) && isset($_POST['password'])) { // verifica se foi recebido login e senha por post
            $email = $_POST['email']; //se sim armazena
            $password = $_POST['password'];       
            if (empty($email)) { //verifica se está vazio
                header("Location: ../index.php?error=email é necessário");//se sim, retorna o erro por GET
                exit(); //garante a finalização da requisição
            } elseif (empty($password)) { //verifica se está vazio
                header("Location: ../index.php?error=senha é necessária");//se sim retorna o erro
                exit();
            } else { //se tudo deu certo
                $hash = password_hash($password, PASSWORD_DEFAULT);//cria um hash da senha, esse é o valor que será armazena no banco
                $sql = "INSERT INTO user (login,senha) VALUES ('$email','$hash')"; //cria uma string com o comando de inserção no banco
    
                try { //tru-catch é utilizado para tatamento de exceções 
                    $result = mysqli_query($conn, $sql);//faz a consulta no banco
                } catch (Exception $e) {
                    header("Location: ../views/cadastre_form.php?error=Erro de comunicação com o banco");//se houver um erro retrona uma info de erro
                    exit(); 
                }
    
                header("Location: ../views/login_form.php");//se tudo deu certo redireciona para o login 
                exit();
            }
        } else {
            header("Location: ../index.php?error=Dados insuficientes");//se faltou dados no form redireciona com a info
            exit();
        }
    } else{
        header("Location: ../views/token_form.php?error=token inválido");//se o token não for válido
    }

} else {
    header('Location: ../views/token_form.php?error=token é necessário');//se não houver token
    exit();
}
