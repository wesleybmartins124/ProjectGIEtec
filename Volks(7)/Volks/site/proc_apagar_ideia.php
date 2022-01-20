<?php
include_once("conexao3.php");
$cod_ideia = filter_input(INPUT_GET, 'cod_ideia', FILTER_SANITIZE_NUMBER_INT);
if(!empty($cod_ideia)){
	$result_usuario = "DELETE FROM cad_ideia WHERE cod_ideia='$cod_ideia'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Ideia apagada com sucesso</p>";
		header("Location: listar.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro no processamento</p>";
		header("Location: novo-mem.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: about-us.php");
}
