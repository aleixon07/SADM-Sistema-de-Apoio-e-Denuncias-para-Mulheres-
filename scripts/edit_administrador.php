<?php
// Inclui o arquivo de conexão com o banco de dados
include_once "connection.php";

// Obtém os valores enviados via método POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha_con = $_POST['senha_atual'];
$senha_conf = md5($senha_con);
$id = $_POST['id'];

// Consulta o banco de dados para obter a senha atual do administrador com base no ID
$sql_sg = "SELECT * FROM administrador WHERE idadministrador = '$id'";
$result_sg = mysqli_query($conn, $sql_sg);

// Verifica se foi encontrado um administrador com o ID fornecido
if (mysqli_num_rows($result_sg) > 0) {
    while ($row_sg = mysqli_fetch_assoc($result_sg)) {
        $senha_bd = $row_sg['senha'];
    }
} else {
    // Redireciona para uma página de erro se o administrador não for encontrado
    header("Location: ../area_admin/pag/administradores.php?alert=Erro ao encontrar administrador");
    exit();
}


// Verifica se a senha fornecida corresponde à senha no banco de dados
if ($senha_conf == $senha_bd) {
    // Consulta o banco de dados para verificar se o novo e-mail já está em uso por outro administrador
    $sql_v = "SELECT * FROM administrador WHERE email = '$email' AND idadministrador != '$id'";
    $result_v = mysqli_query($conn, $sql_v);

    // Redireciona se o e-mail fornecido já estiver em uso
    if (mysqli_num_rows($result_v) > 0) {
        header("Location: ../area_admin/pag/administradores.php?alert=1679091c5a880faf6fb5e6087eb1b2dc");
        exit();
    }

    // Verifica se uma nova senha foi fornecida e atualiza os dados do administrador no banco de dados
    if (!empty($_POST['senha_new']) && isset($_POST['senha_new'])) {

        $senha_new = $_POST['senha_new'];
        $senha_new2 = md5($senha_new);
        
        $sql = "UPDATE administrador SET nome = '$nome', email = '$email', senha = '$senha_new2' WHERE idadministrador = '$id'";
    } else {
        $sql = "UPDATE administrador SET nome = '$nome', email = '$email' WHERE idadministrador = '$id'";
    }

    // Executa a atualização no banco de dados
    $result = mysqli_query($conn, $sql);

    // Redireciona para uma página de sucesso se a atualização for bem-sucedida
    if ($result) {
        header("Location: ../area_admin/pag/administradores.php?alert=eccbc87e4b5ce2fe28308fd9f2a7baf3");
        exit();
    }
} else {
    // Redireciona para uma página de erro se a senha fornecida estiver incorreta
    header("Location: ../area_admin/pag/administradores.php?alert=8f14e45fceea167a5a36dedd4bea2543");
    exit();
}
