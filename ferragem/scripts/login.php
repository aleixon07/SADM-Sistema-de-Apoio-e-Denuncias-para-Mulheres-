<?php
  session_start(); //verfifica se existe uma sessão 
  
  include "connection.php"; //inclui a classe consexão
  
  if (isset($_POST['email']) && isset($_POST['senha'])) {    //verifica se os campos existem

      $email = $_POST['email']; //armazena dos dados recebidos por post em uma variável local
  
      $pass = $_POST['senha'];//armazena dos dados recebidos por post em uma variável local
  
      if (empty($email)) { //verifica se o campo foi preenchido
  
          header("Location: ../views/login_form.php?error=User Name is required"); //redireciona para pagina principal com erro
  
          exit();
  
      }else if(empty($pass)){ //verifica se o campo foi preenchido
  
          header("Location: ../views/login_form.php?error=Password is required"); //redireciona para pagina principal com erro
  
          exit();
  
      }else{ //se as validações dos campos em branco forem bem sucedidas 
          //é necessária uma tabela admin no banco de dados com, com campos de login e password   
          
          $sql = "SELECT * FROM administrador WHERE email='$email' limit 1"; //cria uma string de requisição sql
          try{
            $result = mysqli_query($conn, $sql);//método que entrega a variável conn, importada de connection, e a string de sql
          }catch (Exception $e){            
            header("Location: ../views/login_form.php?error=erro de acesso ao banco de dados");
            exit();
          }           
  
          if (mysqli_num_rows($result) === 1) {//verifica se a variável de retorno da requisição, que deve ser uma lista, possui linhas
  
              $row = mysqli_fetch_assoc($result);//se sim extrai as informações 
  
              if ( password_verify($pass, $row['senha'])) { //faz a validação dos dados inseridos nos campos
                //password_verify testa a senha informada com o hash salvo no banco de dados  
  
                  $_SESSION['email'] = $row['email']; //armazena em variáveis de sessão os dados recebidos 
                
                  $_SESSION['id'] = $row['idadminisrador'];//armazena em variáveis de sessão os dados recebidos 
  
                  header("Location: ../interface_adm.php"); //redireciona para a página de sucesso
  
                  exit();
  
              }else{ //se não redireciona para página inicial com o erro
  
                  header("Location: ../views/login_form.php?error=Incorect User name or password");
  
                  exit();
  
              }
  
          }else{ //na prática a segunda verificação é uma redundância, se não há linhas também redireciona com erro
  
              header("Location: ../views/login_form.php?error=Não foram encontrados usuários");
  
              exit();
  
          }
  
      }
  
  }else{ // se os dados não foram preenchidos ele mantém na página principal
  
      header("Location: ../views/login_form.php");
  
      exit();
  
  }
