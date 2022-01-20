<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['codigofun'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>GI - Log On</title>
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
                <div class="rd-navbar-brand"> <a class="brand" href="logon.php"><img src="images/logo-default-399x82.png" alt="" width="120" height="20"/></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="logon.php">Home</a>
                  </li>
                </ul>
                <div class="rd-navbar-tel">
                  <p>RAMAL - Geração de Ideias</p><a href="tel:#">70-5182/5183</a>
                </div>
                <a class="button button-sm button-default-outline button-winona" href="sair2.php"><div class="content-original">Sair</div><div class="content-dubbed">Sair</div></a>
          </nav>
        </div>
      </header>
      <!-- FScreen-->
      <div class="layout-4">
        <div class="layout-4-item-right">
          <div class="box-custom-2 bg-accent">
            <div class="box-custom-2-bg bg-gray-900"><img class="map-image" src="images/world-map-light.svg" alt=""></div>
            <div class="box-custom-2-inner">
              <h2 class="wow fadeIn">Olá <?php echo $_SESSION['nome']; ?></h2>
              <h4 class="text-default wow fadeIn" data-wow-delay=".2s">Bem vindo(a) a plataforma de manutenção da Equipe Geração de Ideias.</h4>
            </div>
          </div>
        </div>
        <div class="layout-4-item-left"><img src="images/GI.jpg" alt="" width="654" height="515"/>
        </div>
      </div>

      <!-- Our Solutions-->
      <section class="section section-lg bg-gray-100 text-center" id="solutions">
        <div class="container">
        
        </div>
      </section>


      <!-- What We Do-->
      <section class="section section-xl bg-gray-900" id="what-we-do">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-xl-between align-items-center">
            <div class="col-sm-10 col-lg-5">
              <h3>Analisar e decidir...</h3>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line tabs-line_1 block-8" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span>Contexto</span></a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <p class="big">Analisar o melhor caminho a seguir na Volkswagen do Brasil, todos os lados ganham e o trabalho avança ainda mais!</p>
                    <a class="button button-default button-winona" href="proposta.php">Abrir plataforma </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-lg-7 wow fadeIn text-center" data-wow-delay=".2s"><img src="images/analise.jpg" alt="" width="450" height="390"/>
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