<?php

	require_once('conectdb.php');

	if(isset($_POST['usuario'] )and $_POST['usuario']!=''){
		if(isset($_POST['senha']) and $_POST['senha']!=''){
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
	
			$sql="SELECT email_usuario, senha_usuario, nome_usuario, tipo_usuario,usuario_id FROM USUARIO WHERE email_usuario='{$usuario}' and senha_usuario='{$senha}'";
			$resultado=mysqli_query($conexao,$sql);
			if(mysqli_num_rows($resultado)>0){
				while($dados=mysqli_fetch_assoc($resultado)){
					$nome = $dados['nome_usuario'];
					$email = $dados['email_usuario'];
					$tipo = $dados['tipo_usuario'];
					$id = $dados['usuario_id'];	
				}
				session_start();
				$_SESSION['nome']= $nome;	
				
				switch($tipo){
					case 1:
						echo "<script>alert('Bem Vindo ".$nome." !!!'); window.location.href='session.php?nome=$id'</script>";
					break;
					case 2:
						echo "<script>alert('Bem Vindo ".$nome." !!!'); window.location.href='session.php?nome=$id'</script>";
					break;
					case 3:
						echo "<script>alert('Bem Vindo ".$nome." !!!'); window.location.href='session.php?nome=$id'</script>";
					break;
				}
			}else{
				echo "<script>alert('Usuário ou senha incorretos !!!'); window.location.href='index.php'</script>";	
			}
		}
	}else{
		echo "<script> alert('Preencha todos os campos'); window.location.href='index.php'</script>";	
	}

?>