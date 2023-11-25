<?php

session_start();

if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) {

    include_once '../../scripts/connection.php';

    $id = $_SESSION['idusuario'];

    $sql_usuario = "SELECT * FROM administrador WHERE idadministrador = '$id'";

    $result_usuario = mysqli_query($conn, $sql_usuario);

    if (mysqli_num_rows($result_usuario) == 0) {
        header("Location: ../../index.php?erro=2");
        exit();
    } else {
        $row_usuario = mysqli_fetch_assoc($result_usuario);
    }
} else {
    header("Location: ../../index.php?erro=1");
    exit();
}
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SADM</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.php" class="simple-text">
                        <u>SADM</u>
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="./">
                            <i class="nc-icon bi bi-clipboard"></i>
                            <p>Denúncias</p>
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" href="./cat_denuncia.php">
                        <i class="bi bi-tag"></i>
                         <p>Categoria</p>
                        </a>
                    </li >
                    <li class="nav-item active">
                        <a class="nav-link" href="./administradores.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Administradores</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <h4 class="navbar-brand"> Olá, <?php echo $row_usuario['nome']; ?> </h4>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="../../scripts/logout.php">
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <h5 class="card-title mb-0"></h5>
                                </div>
                                <div class="text-start">
                                    <button onclick="toggleForm()" class=" btn border border-dark mb-3 btn-primary" style="border-radius: 25px;">+ Adicionar</button>

                                </div>

                                <div id="formContainer" class="fade-in mb-5" style="display: none;">

                                    <form action="../../scripts/cad_administrador.php" method="POST" class="w-50">
                                        <div class="col mb-2">
                                            <label class="ms-3" for="">Nome</label>
                                            <input required maxlength="100" type="text" name="nome" class="form-control border border-dark" placeholder="Digite o nome">
                                        </div>

                                        <div class="col mb-2">
                                            <label class="ms-3" for="">Email</label>
                                            <input required maxlength="100" type="text" name="email" class="form-control border border-dark" placeholder="Digite o email">
                                        </div>

                                        <div class="col mb-2">
                                            <label class="ms-3" for="">Senha</label>
                                            <input required type="password" name="senha" class="form-control border border-dark" placeholder="Digite a senha">
                                        </div>

                                        <div class="mt-3 text-center">
                                            <a class="btn  text-dark border border-dark" onclick="toggleForm()" style="border-radius: 5px; background-color: #f55858;">Fechar</a>

                                            <button class="btn border border-dark" type="submit" style="border-radius: 5px; background-color: #58f58f;">Enviar</button>

                                        </div>

                                    </form>
                                </div>

                                <table class="table border border-2 border-dark w-75">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="text-light">Nome</th>
                                            <th scope="col" class="text-light">Email</th>

                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php

                                        $sql = "SELECT * FROM administrador";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {

                                        ?>
                                                <tr>
                                                    <td scope='col' class="text-capitalize ps-3">
                                                        <?php echo $row["nome"]; ?>
                                                    </td>
                                                    <td scope='col' class=" ps-3">
                                                        <?php echo $row["email"]; ?>
                                                    </td>



                                                    <td scope="col" class='text-end pe-5'>
                                                        <button data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["idadministrador"]; ?>" class='btn border border-dark border-opacity-25 rounded'><i class="bi bi-pencil-fill"></i></button>

                                                        <button onclick='AlertDeletAdm(<?php echo $row["idadministrador"]; ?>)' class='btn rounded border border-dark border-opacity-25'><i class="bi bi-trash-fill"></i></button>
                                                    </td>
                                                </tr>

                                                <!-- Modal editar -->
                                                <div class="modal fade" id="modal<?php echo $row["idadministrador"]; ?>" tabindex="-1" aria-labelledby="modal<?php echo $row_adm["id"]; ?>" aria-hidden="true">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <div class="modal-header border border-dark bg-dark">
                                                                <h5 class="modal-title text-light mb-3" id="modal_adicionar">Editando Administrador</h5>
                                                            </div>
                                                            <div class="modal-body border-top border-dark  ">
                                                                <form action="../../scripts/edit_administrador.php" method="POST">
                                                                    <label for="" class="text-dark ms-2"><strong>Nome</strong></label>
                                                                    <input type="text" name="nome" id="nome" class="form-control border border-dark mb-3" value="<?php echo $row["nome"]; ?>" required placeholder="Insira o nome">

                                                                    <label for="" class="text-dark  ms-2"><strong>Email</strong></label>
                                                                    <input type="text" name="email" id="email" class="form-control border border-dark mb-3" value="<?php echo $row["email"]; ?>" required placeholder="Insira o email">


                                                                    <label for="" class="text-dark  ms-2"><strong>Nova Senha</strong></label>
                                                                    <input type="password" name="senha_new" id="senha_new" class="form-control border border-dark mb-3"  placeholder="Insira a nova senha que desejar (opcional)">


                                                                    <label for="" class="text-dark  ms-2"><strong>Confirmar Senha</strong></label>
                                                                    <input type="password" name="senha_atual" id="senha_atual" class="form-control border border-dark mb-3" required placeholder="Insira a senha atual, para confirmar a edição">

                                                                    
                                                                    <input type="hidden" name="id" id="id" value="<?php echo $row["idadministrador"]; ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn text-light  bg-danger   border border-dark" data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn bg-success text-light border border-dark">Editar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php

                                            }
                                        } else {
                                            echo "<tr><td class='text-center text-danger' colspan='2'>Nenhuma categoria cadastrada.</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script>
    function AlertDeletAdm(id) {
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Você não será capaz de reverter isso!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `../../scripts/delet_administrador.php?id=${id}`;
            }
        });
    }
</script>
<?php

if (!isset($_GET['alert'])) {
} else if ($_GET['alert'] == md5(1)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Concluído!",
            text: "Administrador adicionado com sucesso.",
            icon: "success"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(2)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Concluído!",
            text: "Administrador excluído com sucesso.",
            icon: "success"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(3)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Concluído!",
            text: "Administrador editado com sucesso.",
            icon: "success"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(4)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Você não pode se excluir.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(5)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Esse email já está cadastrado.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(6)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Esse email já está cadastrado.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(7)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Senha incorreta, as alterações foram descartadas.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "administradores.php";

        });
    </script>

<?php } ?>

<script>
    function toggleForm() {
        const formContainer = document.getElementById('formContainer');

        if (formContainer.style.display === 'none') {
            // Se o formulário está oculto, exibimos com animação de impressão
            formContainer.style.display = 'block';
            formContainer.classList.add('print-in');
        } else {
            // Se o formulário está visível, ocultamos imediatamente
            formContainer.style.display = 'none';
            formContainer.classList.remove('print-in');
        }
    }
</script>

</html>