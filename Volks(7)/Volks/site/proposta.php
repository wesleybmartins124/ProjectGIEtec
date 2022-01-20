<?php
	include_once("conexao3.php");
	$result_cursos = "SELECT * FROM cad_ideia";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>

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
    <title>Propostas</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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
              <div class="rd-navbar-dummy"></div>
            </div>
          </nav>
        </div>
      </header>
	<body>
        
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Propostas - Geração de Ideias</h1>

        <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
      ?>
     
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Título da Ideia</th>
                                <th>Status</th>
                                <th>Ação</th>
							</tr>
						</thead>
						<tbody>
                        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
								<tr>
									<td><?php echo $rows_cursos['Titu_ideia']; ?></td>
                                    <td><?php echo $rows_cursos['situa']; ?></td>
									<td>
                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_cursos['cod_ideia']; ?>">Ver</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_cursos['cod_ideia']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<p><strong> Código da ideia - </strong>  <?php echo $rows_cursos['cod_ideia']; ?></p>
                        <br>
												<p><strong> Título: </strong> <?php echo $rows_cursos['Titu_ideia']; ?></p>
                        <br>
												<p><strong> Melhoria:</strong> <?php echo $rows_cursos['prop']; ?></p>
                        <br>
                        <p><strong> Material que será utilizado:</strong> <?php echo $rows_cursos['material']; ?></p>
                        <br>
                        <p><strong> Vantagem:</strong> <?php echo $rows_cursos['vantage']; ?></p>
                        <br>
                        <button type="button" class="btn btn-danger"> <?php echo "<a href='proc_apagar_ideia.php?cod_ideia=" . $rows_cursos['cod_ideia'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a><br><hr>";?></button>
                        <button type="button" class="btn btn-warning"> <?php echo "<a href='editar.php?cod_ideia=" . $rows_cursos['cod_ideia'] . "''>Editar</a><br><hr>";?></button>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php 
include('footer.php');
?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/personalizado.js"></script>		
</body>

</html>