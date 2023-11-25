<?php



session_start();
include "connection.php";

$id=$_get[idadiminstador];

$delete= "DELETE FROM administrador WHERE idadministrador='$id'";
$del=mysqli_query($conn, $del);

if($del){
    echo'deletado com sucesso';
} else{
    echo 'erro';
}
header('location:ferragem/listar_adm.php')
?>


<!--if (isset($_SESSION['email'])) {
    if (isset($_GET['idadministrador'])) {
        $del_id = $_GET['idadministrador'];
        if (!empty($del_id)) {
            $sql = "DELETE FROM administrador WHERE idadministrador='$del_id'";
            try {
                $result = mysqli_query($conn, $sql);
            } catch (Exception $e) {
                header("Location: ../index.php?error=Erro ao deletar o usuário");
                exit();
            }
            if ($result) {
                header("Location: ../index.php?error=Usuário deletado");
                exit();
            }
        }
    } else {
        header("Location: ../index.php?error=Erro ao deletar o usuário");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}

-->