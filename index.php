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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          <li><a class="nav-link scrollto active" href="#hero">iNÍCIO</a></li>
          <li><a class="nav-link scrollto" href="#about">SOBRE</a></li>
          <li><a class="nav-link scrollto" href="./agressao.php">TIPO DE AGRESSÃO</a></li>
          <li><a class="nav-link scrollto" href="#contact">DENÚNCIA</a></li>
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

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image">
    <img src="assets/img/capa.png" alt="" srcset="">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4"></h1>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <img src="assets/img/sadm.png" style="width: 400px;" class="img-fluid rounded b-shadow-a" alt="">

                    <!-- <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                      </div>
                    </div> -->

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        SOBRE O SITE
                      </h5>
                    </div>
                    <p class="lead">
                      O objetivo geral deste web site é que ele contenha informações sobre os tipos de violências à mulher com um espaço para denúncia anônima para as vítimas. A perspectiva deste trabalho é que se crie uma rede de apoio e atendimento a essas mulheres e se possível as famílias das vítimas envolvidas.

                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        DENÚNCIA
                      </h5>
                    </div>
                    <div>
                      <form action="scripts/cad_denuncia.php" method="POST" enctype="multipart/form-data" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da Denunciante (opcional)">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="tel" name="contato" class="form-control" id="contato" placeholder="Informações de Contato (opcional)">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="datetime-local" name="data_hora" class="form-control" id="data_hora" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="local" class="form-control" id="local" placeholder="Local da Ocorrência" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <textarea class="form-control" name="descricao" id="descricao" rows="4" placeholder="Descrição dos Incidentes" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <select type="text" name="tipo_incidente" class="form-control" id="tipo_incidente" placeholder="Tipo de Incidente" required>
                                <option disabled selected>Determine o tipo do incidente...</option>
                                <?php

                                $sql_categoria = "SELECT * FROM categoria";
                                $result_categoria = $conn->query($sql_categoria);

                                if ($result_categoria->num_rows > 0) {

                                  while ($row_categoria = $result_categoria->fetch_assoc()) { ?>
                                    <option value="<?php echo $row_categoria['idcategoria']; ?>"><?php echo $row_categoria["nome"]; ?></option>
                                <?php
                                  }
                                }
                                ?>
                              </select>
                              <p class="text-end" style="font-size: 12px;"><strong><a href="./agressao.php">*Em dúvida, clique aqui.</a></strong></p>

                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="nome_agressor" class="form-control" id="nome_agressor" placeholder="Nome do Agressor (se conhecido)">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <textarea class="form-control" name="descricao_agressor" id="descricao_agressor" rows="4" placeholder="Detalhes sobre o Agressor"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="testemunhas" class="form-control" id="testemunhas" placeholder="Testemunhas (se houver)">
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="file" name="evidencias" class="form-control" id="evidencias">
                              <p class="text-end" style="font-size: 12px;"><strong>*Evidencias (opcional)</strong></p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="relacao" id="relacao" rows="4" placeholder="Detalhes sobre a Relação entre a Denunciante e o Agressor (opcional)"></textarea>
                            </div>
                          </div>

                          <div class="col-md-12 mt-4 text-center">
                            <button type="submit">Enviar Denúncia</button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 mt-5 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Não Hesite em Pedir Ajuda !
                      </h5>
                    </div>

                    <ul class="list-ico">
                      <li><span class="bi bi-geo-alt"></span> São Borja, RS 97670-000</li>
                      <li><span class="bi bi-phone"></span> (55) 99690-8299</li>
                      <li><span class="bi bi-envelope"></span> sadm@gmail.com</li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">

            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

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
}  else if ($_GET['alert'] == md5(1)) {

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