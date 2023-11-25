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

if (isset($_GET['denuncia']) && !empty($_GET['denuncia'])) {

    $denuncia = $_GET['denuncia'];

    $sql_denuncia = "SELECT * FROM denuncia WHERE iddenuncia = '$denuncia'";

    $result_denuncia = mysqli_query($conn, $sql_denuncia);

    if (mysqli_num_rows($result_denuncia) == 0) {
        header("Location: ./");
        exit();
    } else {
        $row_denuncia = mysqli_fetch_assoc($result_denuncia);
    }
} else {
    header("Location: ./");
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td:nth-child(2) {
            font-weight: bold;
        }

        /* Estilo personalizado para as células da primeira coluna */
        td:nth-child(odd) {
            line-height: 0.5;
            /* Reduz a altura pela metade */
        }
    </style>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="./">
                            <i class="nc-icon bi bi-clipboard"></i>
                            <p>Denúncias</p>
                        </a>
                    </li>
                    <li>
                    <a class="nav-link" href="./cat_denuncia.php">
                        <i class="bi bi-tag"></i>
                         <p>Categoria</p>
                        </a>
                    </li>
                    <li>
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
                    <h4 class="navbar-brand" href=""> Olá, <?php echo $row_usuario['nome']; ?> </h4>

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
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title text-center">Denúncia</h4>

                                    <table>
                                        <tr>
                                            <th>Campos</th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <td>Nome da Denunciante:</td>
                                            <td><?php

                                                if ($row_denuncia['nome_denuciante'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Anônimo</em>";
                                                } else {
                                                    echo $row_denuncia['nome_denuciante'];
                                                }

                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Informações de Contato:</td>
                                            <td>
                                                <?php
                                                if ($row_denuncia['info_contato'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Sem informações de contato</em>";
                                                } else {
                                                    echo $row_denuncia['info_contato'];
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Data e Hora da Ocorrência:</td>
                                            <td><?php echo $row_denuncia['data_hora']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Local da Ocorrência:</td>
                                            <td><?php echo $row_denuncia['local_ocorrencia']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Descrição dos Incidentes:</td>
                                            <td><?php


                                                echo $row_denuncia['descricao_incidente'];


                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tipo de Incidente:</td>
                                            <td><?php   

                                                $id_cat = $row_denuncia['tipo_incidente'];

                                                $sql_cat = "SELECT * FROM categoria WHERE idcategoria = '$id_cat'";

                                                $result_cat = mysqli_query($conn, $sql_cat);

                                                $row_cat = mysqli_fetch_assoc($result_cat);
                                                
                                                echo $row_cat['nome'];
                                                 ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nome do Agressor:</td>
                                            <td><?php
                                                if ($row_denuncia['nome_agressor'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Sem conhecimento do nome do Agressor</em>";
                                                } else {
                                                    echo $row_denuncia['nome_agressor'];
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Detalhes sobre o Agressor:</td>
                                            <td><?php echo $row_denuncia['detalhe_agressor']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Testemunhas:</td>
                                            <td><?php
                                                if ($row_denuncia['testemunhas'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Nenhuma testemunha</em>";
                                                } else {
                                                    echo $row_denuncia['testemunhas'];
                                                }
                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Evidências:</td>
                                            <td><?php

                                                if ($row_denuncia['evidencia'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Sem evidências</em>";
                                                } else {

                                                    $evidencia =  $row_denuncia['evidencia'];

                                                    echo "<a href='../../evidencias/" . $evidencia . "' style='text-decoration: underline;' download>Baixar evidência <i class='bi bi-box-arrow-in-down'></i></a>";
                                                }

                                                ?></td>
                                        </tr>
                                        <tr>
                                            <td>Detalhes sobre a Relação entre a Denunciante e o Agressor:</td>
                                            <td><?php
                                                if ($row_denuncia['relacao_agressor'] == null) {
                                                    echo "<em style='color:#c2c0c2;'>Sem ligação com o Agressor</em>";
                                                } else {
                                                    echo $row_denuncia['relacao_agressor'];
                                                }

                                                ?></td>
                                        </tr>
                                    </table>

                                    <div class="text-center mt-3 mb-3">

                                        <form action="composer/index.php" method="POST">

                                            <button type="button" onclick="DeletDenuncia(<?php echo $row_denuncia['iddenuncia']; ?>)" class="btn text-light border border-light bg-danger">Excluir</button>

                                            <input type="hidden" value="<?php echo $row_denuncia['iddenuncia']; ?>" name="iddenuncia">

                                            <button type="submit" class="btn text-light border border-light bg-success">Baixar Denúncia</button>

                                        </form>

                                    </div>
                                </div>
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
    function DeletDenuncia(id) {
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
                window.location.href = `../../scripts/delet_denuncia.php?id=${id}`;
            }
        });
    }
</script>

</html>