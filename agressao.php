<?php
include_once "scripts/connection.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SADM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header style="background-color: black;" id="header" class="absolut-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">SADM</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="./#hero">iNÍCIO</a></li>
                    <li><a class="nav-link scrollto" href="./#about">SOBRE</a></li>
                    <li><a class="nav-link scrollto active" href="./agressao.php">TIPO DE AGRESSÃO</a></li>
                    <li><a class="nav-link scrollto" href="./#contact">DENÚNCIA</a></li>
                    <li><a class="nav-link scrollto"><button data-bs-toggle="modal" data-bs-target="#modal" class="nav-link scrollto">RESTRITO</button></a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Modal LOGIN -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header border border-dark bg-dark">
                    <h5 class="text-center text-light" id="modal_adicionar"></h5>
                </div>
                <div class="modal-body border-top border-dark  ">
                    <form action="scripts/login.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <img class="w-100" height="300" style="border-radius: 10px;" src="assets/img/uniao.jpg" alt="">
                            </div>
                            <div class="col">
                                <h5 class="title-left ms-5 mb-5">Seja Bem-Vindo</h5>

                                <label for="" class="ms-3">Email</label>
                                <input type="email" name="email" class="form-control border border-dark">

                                <label for="" class="ms-3 mt-4">Senha</label>
                                <input type="password" name="senha" class="form-control border border-dark">

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn text-light w-100" style="background-color: #d138b5;">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <?php
                                $sql = "SELECT * FROM categoria";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {?>

                                        <div class="col-4 ">
                                            <h4 class="text-center"><?php echo $row['nome']; ?></h4>
                                            <p style=""><?php echo $row['descricao']; ?></p>
                                        </div>

                                 <?php   }

                                } else {
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->



    </main><!-- End #main -->



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

<?php
if (!isset($_GET['alert'])) {
} else if ($_GET['alert'] == md5(1)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Agradecemos a denúncia!",
            text: "Faremos o possível para ajudá-la.",
            icon: "success"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "./";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(2)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Usuário não encontrado.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "./";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(3)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Email ou Senha incorreto.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "./";

        });
    </script>

<?php } else if ($_GET['alert'] == md5(4)) {

?>
    <script>
        // Função para mostrar o SweetAlert
        Swal.fire({
            title: "Atenção!",
            text: "Sem conexão com o Banco.",
            icon: "error"

        }).then((result) => {
            // Verifica se o usuário clicou em "OK"
            // Muda a URL após o SweetAlert ser fechado
            window.location.href = "./";

        });
    </script>

<?php } ?>

</html>