<?php 
include('conexao3.php');

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Inserir Novo Membro</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CPoppins:300,400,500,600,700%7CMuli:200,300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader" id="loading">
      <div class="preloader-body">
        <div id="loading-center-object">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header--><a class="banner banner-top" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid.jpg" alt="" height="0"/></a>
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="10px" data-xl-stick-up-offset="10px" data-xxl-stick-up-offset="10px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"> <a class="brand" href="index.php"><img src="images/logo-default-399x82.png" alt="" width="120" height="20"/></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                </ul>
                <div class="rd-navbar-tel">
                  <p>RAMAL - Geração de Ideias</p><a href="tel:#">70-5182/5183</a>
                </div>
              </div>
              <div class="rd-navbar-dummy"></div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom">
        <section class="section parallax-container breadcrumbs-custom-main context-dark" data-parallax-img="images/bg-image-1.jpg">
          <div class="parallax-content">
            <div class="container">  
              <div class="row justify-content-center">
                <div class="col-xl-9">
                  <h2 class="breadcrumbs-custom-title">Novo membro</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Novo membro</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Get in Touch-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Novo membro da equipe</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
              <!-- RD Mailform-->
              <form method="POST" action="processa.php">
                <div class="row row-x-16 row-20">

                  <div class="col-md-6">
              
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="nome" placeholder="Digite o nome completo">
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="email" type="email" name="email"placeholder="Digite seu e-mail" >
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-password" type="password" name="senha" placeholder="Digite sua senha">
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="number" name="telefone" placeholder="Digite seu telefone">
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      
                      <textarea class="form-input" id="contact-message" type="text" name="obs" placeholder="observação" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-button">
                      <input class="button button-block button-primary" type="submit" value="INSERIR NOVO MEMBRO DA EQUIPE"/>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
   <?php
      include('footer.php');
    ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>