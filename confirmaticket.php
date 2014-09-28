<?php
	if(isset($_POST)){
		require_once("conectdb.php");
			mysqli_query($conexao,"SET NAMES 'utf8'");
			mysqli_query($conexao,'SET character_set_connection=utf8');
			mysqli_query($conexao,'SET character_set_client=utf8');
			mysqli_query($conexao,'SET character_set_results=utf8');

		
		$usuario_id = $_POST['cod'];
		$descricao = $_POST['txt_descricao'];
		$titulo = $_POST['txt_titulo'];
		$localizacao = $_POST['txt_local'];
		
		
		
		$sql = "INSERT INTO protocolo(titulo,descricao,usuario_id,localizacao) VALUES ('$titulo', '$descricao', $usuario_id,'$localizacao')";
		
		$resultado = mysqli_query($conexao,$sql);
		if(mysqli_affected_rows($conexao)>0){
			echo "<script> alert('Ticket Gerado com sucesso'); window.location.href='main.php?nome=$usuario_id'</script>";	
		}else{
			echo "FALHA";	
		}
		
		
	}else{
		exit;
		header("Location: index.php");	
	}



?>