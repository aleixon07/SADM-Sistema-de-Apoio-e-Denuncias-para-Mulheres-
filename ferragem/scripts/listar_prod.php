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
            
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Lista de Produto</title>
    <meta name="author" content="Ane">
</head>
<style>



</style>
<body>
    
<header>
        <div class="center">
            <div class="logo">
                 <h2>Produtos</h2>
              
            </div><!--logo-->
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="./listar_adm.php">Administradores</a>
                <a href="./categorias.php">Categorias</a>
    
            </div><!--menu-->
        </div><!--center-->
        </header>
    <table>
<tr>

<td>aaaa</td>
   <th>Nome</th>
   <th>idcategoria</th>
   <th>idproduto</th>
   <th>lote</th>
   <th>preco</th>
   <th>validade</th>
</tr>
<tr>
    <td><?php echo $_SESSION['nome']?></td>
    <td><?php echo $_SESSION['idcategoria']?></td>
    <td><?php echo $_SESSION['idproduto']?></td>
    <td><?php echo $_SESSION['idlote']?></td>
    <td><?php echo $_SESSION['preco']?></td>
    <td><?php echo $_SESSION['validade']?></td>
   
</tr>


    </table>
</body>
</html>

<!--PHP--------------------------------------------------------------------------------------------------->
<?php
session_start();
//existem muitas formas de listar elementos, eu escolhi concatenar uma string
include "./scripts/connection.php"; //esse caminho pode parecer estranho, mas lembre-se que essa lista estará em index
//innerContent é a variável que irá armazenar a string que dará origem ao código html da lista
//utilizou-se uma tabela, estilizada em btstrp
$innerContent = ("
<table class=table>
    <thead>
        <th>Nome</th>
        <th>E-mail</th>
    </thead>
    <tbody>
"); //eu quero que o cabeçalho da tabela esteja sempre presente portanto o início e o fim da estrutura é estático

if (isset($_SESSION['email'])) { //uma validação para verificar se se o usuário está logado
    $sql = "SELECT * FROM produto"; //uma string com o comando de consulta no banco de dados
    try {
        $result = mysqli_query($conn, $sql); //faz a consulta no banco de dados e armazena, consulte a documentação para mais informaçõs da função
    } catch (Exception $e) {
        header("Location: ../index.php?error=Erro ao recuperar os usuarios");//se houver erro redireciona e retorna uma msg por GET
        exit();
    }

    if (mysqli_num_rows($result) > 0) {  //se hoveram resultados      
        while($lista = mysqli_fetch_assoc($result)) { //itera sobre todos os resultado, armazenando cada um na variável $lista por iteração                      
            //lista armazena um array associativo com os valores dos campos do BD
            //a seguir faz-se uma concatenação com o cabeçalho da tabela, definido anteriormente, o operador .= faz a concatenação
            $innerContent .= 
            "<tr> 
                <td>$lista[idproduto]</td>
                <td>$lista[idcategoria]</td>
                <td>$lista[nome]</td>
                <td>$lista[lote]</td>
                <td>$lista[preco]</td>
                <td>$lista[validade]</td>
              
                <td>
                    <a href='./scripts/edit_user.php?id=$lista[idproduto]' class='btn btn-primary'>Editar</a>
                                        
                    <!-- Button trigger modal -->
                    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#excluir_modal_$lista[idproduto]'>
                    Excluir
                    </button>

                    <!-- Modal Excluir-->
                    <div class='modal fade' id='excluir_modal_$lista[idproduto]' tabindex='-1' role='dialog' aria-labelledby='excluir_modal_Label' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='excluir_modalLabel'>Excluindo usuário</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <p>Deseja excluir o usuário?</p>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                    <a href='./scripts/delete_user.php?id=$lista[idproduto]' class='btn btn-danger'>Deletar</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </td>
            </tr>";//Nesse momento os botões editar e deletar são inseridos, mas não são funcionais, a lógica dessas torinas ainda deve ser implementada
        }
    }
} else {
    header("Location: ./index.php");
    exit();
}

$innerContent .= "</tbody></table>"; //ao final, fecha-se as tags da tabela
echo $innerContent; //retorna-se a tabela completa

?>
</body>
</html>