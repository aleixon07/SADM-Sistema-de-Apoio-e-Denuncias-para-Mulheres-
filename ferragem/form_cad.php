<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuquel Ferragens - Cadastro</title>
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

    <style>
     *{
          margin: 0px;
          border: 0px;
          padding: 0px;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
          color: rgb(0, 0, 0);
        }
        
        body{
            background: rgb(255, 238, 0);
            background-repeat: no-repeat;
            min-height: 100vh;
            min-width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
       
        main.container{
            background: rgb(255, 255, 255);
            min-width: 350px;
            min-height: 40vh;
            padding: 2rem;
            box-shadow: 5px 5px 15px rgb(0, 0, 0);
            border-radius: 8px;
        }

        main h2{
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
        }

        .input-field{
        position: relative;
         }

         .input-field input{
        outline: none;
        font-size: 1.2rem;
        color: rgb(0, 0, 0);
       }

       form input[type="submit"]{
       margin-top: 2rem;
       padding: 0.4rem;
       background: black;
       cursor: pointer;
       color: rgb(255, 255, 255);
       font-size: 1.3rem;
       font-weight: 300;
       border-radius: 4px;
       transition: all 0.3s ease;
       }

       form input[type="submit"]:hover{
        letter-spacing: 0.4px;
        background: rgb(53, 53, 53);
       }

       form{
        display: flex;
        flex-direction: column; 
       }

       h2 a{
        color: rgb(255, 145, 0);
       }

       h2 a:hover{
        color: rgb(255, 208, 0);
       }

       .footer{
        display: flex;
        flex-direction: column;
        margin-top: 1rem;
       }

       form .input-field:first-child{
        margin-bottom: 1.5rem;
       }
       
       .input-field .underline::before{
        content:'';
        position: absolute;
        height: 2px;
        width: 100%;
        bottom: -5px;
        left: 0;
        background: black;
       }

       form .input-field{
        margin-bottom: 1.5rem;
       }
       
       .input-field .underline::before{
        content:'';
        position: absolute;
        height: 2px;
        width: 100%;
        bottom: -5px;
        left: 0;
        background: black;
       }

    </style>

</head>
<body>
<main class="container">
    <h2>Cadastro de Administradores</h2>
    
 <form method="POST" action="./scripts/cadastro.php">
 <div class="input-field">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <div class="underline"></div>  
    </div>

    <div class="input-field">
        <input type="text" name="email" id="email" placeholder="ex@exemplo.com.br">
        <div class="underline"></div>  
    </div>

    <div class="input-field">
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <div class="underline"></div>  
    </div>

      <input type="submit" value="Cadastrar"> 
  </form>

  <div class="footer">
    <h2>Já possui cadastro? <a href="form_login.php"">faça login</a></h2>
  </div>


</main>

<!--localhost/ferragem/form_cad.php
-->
</body>
</html>