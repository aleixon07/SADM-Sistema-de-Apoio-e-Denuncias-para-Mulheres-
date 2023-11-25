<?php
//cada uma dessas variáveis armazena strings que serão usadas para acesso ao banco
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ferragem";

// Cria uma instância de conexão
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Verifica se a conexão foi bem sucedida 

if (!$conn) {
  echo "Falha na conexão";
} else{
  
}

?>