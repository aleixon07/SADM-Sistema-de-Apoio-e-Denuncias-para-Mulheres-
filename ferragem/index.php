<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuquel Ferragens</title>
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
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
   
    .center{
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 2%;
        display: flex;
    }

    header{
        background-color: black;
        padding: 20px 0;
        border-bottom: 4px solid yellow;
       
    }

    .logo{
        color: white;
    }

    .menu a{
        color: white;
        font-size: 19px;
        text-decoration: none;
        
        padding: 15px;

    }

    .menu{
       width: 60%;
       text-align: right; 
       
    }

    .menu a:hover{
    color: yellow;
    }
    
    .imagem{
    background-size: containt;
    }
    
    section.main{
    background-image: url(imagens/foto.jpeg);
    min-height: 500px;
    background-position: center;
    background-position: absolute;
    background-size: cover;
    background-repeat: no-repeat;
    border-bottom: 5px solid yellow;
    }
    

    .main-papapa h1{
    margin-top: 140px;
    font-size: 80px;
    text-align: center;
    color: rgb(255, 191, 0);
    }

    .main-papapa h2{
    font-size: 70px;
    text-align: center;
    color: rgb(255, 204, 0);
    }

    .sobre-papapa h1{
        font-size: 50px;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .sobre-papapa h2{
        color:rgb(0, 0, 80);
        margin-top: 10px;
        display: flex;
        text-align: center;
        
    }

    .sobre-papapa p{
     margin-top: 5px;
     font-family: 'Lora', serif;
    }

    .texto-sobre p{
        font-family: 'Lora', serif;
    }

    .rodape{
        width:90%;
        height: 50px;
        display: flex;
        justify-content: center;
    }

    footer{
        width: 100%;
        height: 250px;
        background: black;
        display: flex;
    }

    footer.boxs{
        height: 320px;
        min-height: 150px;
        padding:20px;
    }

    footer.boxs:nth-child(4){
        width: 400px;
    }

    .boxs h2{
        color: yellow;
        margin-bottom: 20px;
    }

    .boxs ul li{
        margin: 10px 0px;
        list-style: none;
        color: white;
    }

    .boxs ul li a{
    color: white;
    text-decoration: none;
    align-items: center;
    }
    
    .menu-rodape h2{
        color: yellow;
        margin-bottom: 20px;
    }

    .menu-rodape ul li a{
        text-decoration: none;
        color: white;
        margin: 10px 0px;
        list-style: none;
        
    }

    .menu-rodape ul li a:hover{
     color: yellow;
     margin-left: 30px;
    }
    
    .tudo-footer{
        padding: 20px;
        padding-left: 70px
    }

    .texto-sobre{
        font-size: 19px;
    }

    .paragrafo{
        font-size: 19px;
    }



    </style>
</head>
<body>

    
    <header>
    <div class="center">
        <div class="logo">
             <h2>Chuquel Ferragens & Rações</h2>
          
        </div><!--logo-->
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="./scripts/prod_index.php">Produtos</a>
            <a href="./form_login.php">Login</a>
            <a href="form_cad.php">Cadastro</a>

        </div><!--menu-->
    </div><!--center-->
    </header>

    <section class="main">
      <div class="center">
      <div class="main-papapa">
       
      </div>

      </div><!--center-->
    </section><!--main-->

    <section class="sobre">
        <div class="center">
        <div class="sobre-papapa">
            <h1>Olá, seja bem-vindo!</h1>
            <h2>Sobre a ferragem</h2>
            <p class="paragrafo">Somos uma loja focada em venda de ferramentas, rações e materiais em geral.</p>
            <div class="texto-sobre">
             <p>Atendemos toda a nossa região e nosso objetivo é oferecer produtos de qualidade</p>
             <p>com preços acessíveis a fim de suprir as necessidades de nossos clientes.</p>


            </div><!--texto-sobre-->
        </div><!--sobre, papapa.-->
        </div><!--center-->
    </section><!--sobre-->
      
    <div class="rodape">
        
    </div><!--rodapé-->

    <!--Rodapé-->
    <footer class="tudo-footer">
      <div class="menu-rodape">
        <h2>Menu</h2>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">Produtos</a></li>
        <li><a href="form_login.php">Login</a></li>
        <li><a href="form_cad.php">Cadastro</a></li>
     </ul>
    </div>
            <div class="boxs">
               <h2>Informações</h2>
               <ul>
               <li><a href="#">Av. Francisco Miranda 134</a></li>
               <li><a href="#">São Borja, RS</a></li>
               <li><a href="#">Telefone: (55)99703-3189</a></li>
               <li><a href="#">E-mail: chuquelferragem2022@gmail.com</a></li>
               </ul>
            </div>

            <div class="boxs">
                <h2>Redes Sociais</h2>
                <ul>
                <img src="imagens/facebook.png" alt="">
                <img src="imagens/whatsapp.png" alt="">
                <img src="imagens/logotipo-do-instagram.png" alt="">
                </ul>
             </div>
    </footer>

</body>
</html>

<!--localhost/ferragem/index.php
-->