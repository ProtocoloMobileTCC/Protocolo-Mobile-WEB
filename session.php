<?php

	require_once('conectdb.php');
	
	$id = $_GET['nome'];
	$sql="SELECT * FROM USUARIO WHERE usuario_id='{$id}'";
	$resultado=mysqli_query($conexao,$sql);
	
	if(mysqli_num_rows($resultado)>0){
		while($dados=mysqli_fetch_array($resultado)){
			$nome = $dados['nome_usuario'];
			$login = $dados['email_usuario'];
			$tipo = $dados['tipo_usuario'];
			$Uid = $dados['usuario_id'];
			$ativo = $dados['usuario_ativo'];	
		}
		switch($tipo){
			case 1:
				echo "<script> window.location.href='main2.php?nome=$id'</script>";
			break;
			case 2:
				echo "<script>window.location.href='mainopr.php?nome=$id'</script>";
			break;
			case 3:
				echo "<script> window.location.href='mainadm.php?nome=$id'</script>";
			break;
		}
	}

?>