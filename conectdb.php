<?php
	require_once('conf.php');
	
	$conexao=mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO);
	if(mysqli_connect_errno($conexao)){
		 echo "Erro ao conectar-se com o banco de dados. ";	
		 die();
	}
?>