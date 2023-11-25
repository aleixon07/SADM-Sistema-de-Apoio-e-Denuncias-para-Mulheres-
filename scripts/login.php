<?php

session_start();

session_destroy();

session_start();

include_once "connection.php";

if(isset($_POST['email']) && isset($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha_new = md5($senha);

    $sql = "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha_new' LIMIT 1";

    $result = mysqli_query($conn, $sql);

    if($result){

        if(mysqli_num_rows($result) == 0){

           // nao cadastrado
            header("Location: ../index.php?alert=c81e728d9d4c2f636f067f89cc14862c");
    //     header("Location: ../");
            exit();
    
        }else{
            while ($row = mysqli_fetch_assoc($result)) {
    

                $_SESSION['idusuario'] = $row['idadministrador'];
    
                header("Location: ../area_admin/pag/");
                exit();
            }
        }

    }else{
       // header("Location: ../");
       //email ou senha incorreto
      
       header("Location: ../index.php?alert=eccbc87e4b5ce2fe28308fd9f2a7baf3");
       //     header("Location: ../");
               exit();
    }
    

}else{
    //nao foi posivel conectar com o banco 
    header("Location: ../index.php?alert=a87ff679a2f3e71d9181a67b7542122c");
               exit();  
}

?>