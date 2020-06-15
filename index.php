<?php

session_start();

if (!isset($_SESSION['userlogin'])) {
  header("Location: login.php");
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION);
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Projeto</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="css/resume.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Márcio George</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/perfil.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#Sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#Profissao">Profissão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#academica">F.Acadêmica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#hobbies">hobbies</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-secondary btn-lg btn-block">
            <a href="index.php?logout=true">Deslogar</a>
          </button>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Sobre">
      <div class="w-100">
        <h1 class="mb-5">Márcio
          <span class="text-primary">George</span>
        </h1>
        <div class="row">
          <div class="col-lg-6">
            <p class="lead mb-5">Sou quieto (na minha), que tem um bom coração, tento de tudo para aquele que em minha
              volta, não se tornem chatos (ha ha).<strong><b>Ex-cosplayer</b></strong> </p>
          </div>
          <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item border border-secondary" src="https://www.youtube.com/embed/sZTGjdWXnuo" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="social-icons">
          </a>
          <a href="https://steamcommunity.com/id/Ukiu/">
            <i class="fab fa-steam"></i>
          </a>
          <a href="https://www.instagram.com/marcio_.george/">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/marcio.george.16">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="Profissao">
      <div class="w-100">
        <h2 class="mb-5">Profissão</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Personalizador</h3>
            <div class="subheading mb-3">De canecas, copos etc.</div>
            <img class="img-fluid border border-dark mx-auto mb-2" src="img/persobanner.png" alt="">
          </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Vendedor</h3>
            <div class="subheading mb-3">Facas artesanais</div>
            <img class="img-fluid border border-dark mx-auto mb-2" src="img/facabanner.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="academica">
      <div class="w-100">
        <h2 class="mb-5">Formação acadêmica</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-4">Ensino Fundamental</h3>
            <div class="subheading mb-3">instituto sao josé</div>
            <div class="subheading mb-3">João wesley</div>
          </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-4">Ensino Médio</h3>
            <div class="subheading mb-3">João wesley</div>
            <div class="subheading mb-3">Centro de ensino médio 01</div>
          </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-4">Ensino Superior</h3>
            <div class="subheading mb-3">UDF</div>
            <div class="subheading mb-3">Projeção</div>
          </div>
        </div>
      </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="hobbies">
      <div class="w-100">
        <h2 class="mb-5">Hobbies</h2>
        <div class="row">
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/steambanner.png" alt="">
          </div>
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/carbanner.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/filmesbanner.png" alt="">
          </div>
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/netflixbanner.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/leiturabanner.png" alt="">
          </div>
          <div class="col col-lg-6">
            <img class="img-fluid border border border-danger mx-auto mb-2" src="img/musicbanner.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <hr class="m-0">
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/resume.min.js"></script>
</body>

</html>