<?php
session_start();
ob_start();
include_once 'conexao.php';

$cod_ideia = filter_input(INPUT_GET, "cod_ideia", FILTER_SANITIZE_NUMBER_INT);

if (empty($cod_ideia)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: ideia  não encontrada!</p>";
    header("Location: proposta.php");
    exit();
}

$query_usuario = "SELECT Titu_ideia,prop ,situa ,material, vantage,tipo_ideia,area_hr, ctt,cod_ideia, lugar, aprov FROM cad_ideia WHERE cod_ideia = $cod_ideia LIMIT 1";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro!</p>";
    header("Location: proposta.php");
    exit();
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Cadastar ideia</title>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="logon.php">Home</a>
                  </li>
                </ul>
                <div class="rd-navbar-tel">
                  <p>RAMAL - Geração de Ideias</p><a href="tel:#">70-5182/5183</a>
                </div>
                <a class="button button-sm button-default-outline button-winona" href="sair2.php"><div class="content-original">Sair</div><div class="content-dubbed">Sair</div></a>
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
                  <h2 class="breadcrumbs-custom-title">Editar</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="breadcrumbs-custom-aside">
        
        </div>
      </section>
        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['EditUsuario'])) {
            $empty_input = false;
            $dados = array_map('trim', $dados);
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } 

            if (!$empty_input) {
                $query_up_usuario= "UPDATE cad_ideia SET Titu_ideia=:Titu_ideia,prop=:prop, situa=:situa, material=:material,
                                    vantage=:vantage, tipo_ideia=:tipo_ideia, area_hr=:area_hr, ctt=:ctt, cod_ideia=:cod_ideia,
                                    lugar=:lugar, aprov=:aprov WHERE cod_ideia=:cod_ideia";
                $edit_usuario = $conn->prepare($query_up_usuario);
                $edit_usuario->bindParam(':Titu_ideia', $dados['Titu_ideia'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':prop', $dados['prop'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':situa', $dados['situa'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':material', $dados['material'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':vantage', $dados['vantage'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':tipo_ideia', $dados['tipo_ideia'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':area_hr', $dados['area_hr'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':ctt', $dados['ctt'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':cod_ideia', $cod_ideia, PDO::PARAM_INT);
                $edit_usuario->bindParam(':lugar', $dados['lugar'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':aprov', $dados['aprov'], PDO::PARAM_STR);
                if($edit_usuario->execute()){
                    $_SESSION['msg'] = "<p style='color: green;'>Ideia editada com sucesso!</p>";
                    header("Location: proposta.php");
                }else{
                    echo "<p style='color: #f00;'>Erro: Ideia não editada com sucesso!</p>";
                }
            }
        }
        ?>
<section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Editar ideia</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
        <form id="edit-usuario" method="POST" action="">
        <div class="row row-x-16 row-20">
        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Título da ideia: </label>
            <input class="form-input" type="text" name="Titu_ideia" id="Titu_ideia" placeholder="Título da ideia:" value="<?php
            if (isset($dados['Titu_ideia'])) {
                echo $dados['Titu_ideia'];
            } elseif (isset($row_usuario['Titu_ideia'])) {
                echo $row_usuario['Titu_ideia'];
            }
            ?>" ><br><br>
</div>
        </div>
        <br>
        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Status: </label>
            <input class="form-input" type="text" name="situa" id="situa" placeholder="Status:" value="<?php
                   if (isset($dados['situa'])) {
                       echo $dados['situa'];
                   } elseif (isset($row_usuario['situa'])) {
                       echo $row_usuario['situa'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>


        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Proposta: </label>
            <input class="form-input" type="text" name="prop" id="prop" placeholder="Proposta:" value="<?php
            if (isset($dados['prop'])) {
                echo $dados['prop'];
            } elseif (isset($row_usuario['prop'])) {
                echo $row_usuario['prop'];
            }
            ?>" ><br><br>
</div>
        </div>
        <br>
        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Material que será utilizado: </label>
            <input class="form-input" type="text" name="material" id="material" placeholder="Material:" value="<?php
                   if (isset($dados['material'])) {
                       echo $dados['material'];
                   } elseif (isset($row_usuario['material'])) {
                       echo $row_usuario['material'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>
        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Vantagem da proposta: </label>
            <input class="form-input" type="text" name="vantage" id="vantage" placeholder="Vantagem:" value="<?php
                   if (isset($dados['vantage'])) {
                       echo $dados['vantage'];
                   } elseif (isset($row_usuario['vantage'])) {
                       echo $row_usuario['vantage'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>
        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Tipo de ideia: </label>
            <input class="form-input" type="text" name="tipo_ideia" id="tipo_ideia" placeholder="..." value="<?php
                   if (isset($dados['tipo_ideia'])) {
                       echo $dados['tipo_ideia'];
                   } elseif (isset($row_usuario['tipo_ideia'])) {
                       echo $row_usuario['tipo_ideia'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>

        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Área que se destina: </label>
            <input class="form-input" type="text" name="area_hr" id="area_hr" placeholder="Área" value="<?php
                   if (isset($dados['area_hr'])) {
                       echo $dados['area_hr'];
                   } elseif (isset($row_usuario['area_hr'])) {
                       echo $row_usuario['area_hr'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>

        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Email do responsável: </label>
            <input class="form-input" type="email" name="ctt" id="ctt" placeholder="Email do idealizador" value="<?php
                   if (isset($dados['ctt'])) {
                       echo $dados['ctt'];
                   } elseif (isset($row_usuario['ctt'])) {
                       echo $row_usuario['ctt'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>

        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Local de implementação: </label>
            <input class="form-input" type="text" name="lugar" id="lugar" placeholder="Local" value="<?php
                   if (isset($dados['lugar'])) {
                       echo $dados['lugar'];
                   } elseif (isset($row_usuario['lugar'])) {
                       echo $row_usuario['lugar'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>

        <div class="col-md-6">
                    <div class="form-wrap">
            <label>Email do aprovador da ideia </label>
            <input class="form-input" type="email" name="aprov" id="aprov" placeholder="Aprovador" value="<?php
                   if (isset($dados['aprov'])) {
                       echo $dados['aprov'];
                   } elseif (isset($row_usuario['aprov'])) {
                       echo $row_usuario['aprov'];
                   }
                   ?>" ><br><br>
                   </div>
        </div>
        <br>
        
            <input type="submit" class="btn btn-success" value="Salvar" name="EditUsuario">
                </div>
            </div>
          </div>
        </div>
      </section>
        </form>
        <?php 
include('footer.php');
?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
    </body>
</html>
