<?php
session_start();
include_once("conexao3.php");

$Titu_ideia = filter_input(INPUT_POST, 'Titu_ideia', FILTER_SANITIZE_STRING);
$prop = filter_input(INPUT_POST, 'prop', FILTER_SANITIZE_STRING);
$situa = filter_input(INPUT_POST, 'situa', FILTER_SANITIZE_STRING);
$material = filter_input(INPUT_POST, 'material', FILTER_SANITIZE_STRING);
$vantage = filter_input(INPUT_POST, 'vantage', FILTER_SANITIZE_STRING);
$tipo_ideia = filter_input(INPUT_POST, 'tipo_ideia', FILTER_SANITIZE_STRING);
$area_hr = filter_input(INPUT_POST, 'area_hr', FILTER_SANITIZE_STRING);
$ctt = filter_input(INPUT_POST, 'ctt', FILTER_SANITIZE_STRING);
$lugar = filter_input(INPUT_POST, 'lugar', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO cad_ideia(Titu_ideia,prop ,situa ,material, vantage,tipo_ideia,area_hr, ctt, lugar   ) VALUES ('$Titu_ideia','$prop' ,'$situa' ,'$material', '$vantage', '$tipo_ideia', '$area_hr','$ctt', '$lugar' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
