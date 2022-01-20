<?php
session_start();
ob_start();
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CPoppins:300,400,500,600,700%7CMuli:200,300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .ie-panel{display: none;background: #212121;padding: 20px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

<body>
    <?php
    //Exemplo criptografar a senha
    //echo password_hash(123456, PASSWORD_DEFAULT);
    ?>
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

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendLogin'])) {
        //var_dump($dados);
        $query_usuario = "SELECT id, nome, chapa, senha_usuario 
                        FROM usuarios 
                        WHERE chapa =:chapa  
                        LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':chapa', $dados['chapa'], PDO::PARAM_STR);
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            //var_dump($row_usuario);
            if(($dados['senha_usuario'] == $row_usuario['senha_usuario'])){
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                header("Location: inlog.php");
            }else{
                $_SESSION['msg'] = "<p style='color: #ff0000'>  Erro: Usuário ou senha inválida!</p>";
            }
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>    Erro: Usuário ou senha inválida!</p>";
        }

        
    }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    
<section class="breadcrumbs-custom">
        <section class="section parallax-container breadcrumbs-custom-main context-dark" data-parallax-img="images/bg-image-1.jpg">
          <div class="parallax-content">
            <div class="container">  
              <div class="row justify-content-center">
              </div>
            </div>
          </div>
        </section>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Index</a></li>
              <li class="active">Login</li>
            </ul>
          </div>
        </div>
      </section>
    <form method="POST" action="">
        <label>  Chapa</label>
        <input class="form-input" type="text" name="chapa" placeholder="Digite a chapa" value="<?php if(isset($dados['chapa'])){ echo $dados['chapa']; } ?>"><br><br>

        <label>Senha</label>
        <input class="form-input" type="password" name="senha_usuario" placeholder="Digite a senha" value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>"><br><br>

        <input class="button button-block button-primary" type="submit" value="Acessar" name="SendLogin">
    </form>
    <?php 
include('footer.php');
?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>