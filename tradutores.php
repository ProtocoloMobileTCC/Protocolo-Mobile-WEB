<title>tradutores</title>
<?php
	
	header('Content-type: text/html; charset=utf-8');
	require_once("conectdb.php");
	
	mysqli_query($conexao,"SET NAMES 'utf8'");
	mysqli_query($conexao,'SET character_set_connection=utf8');
	mysqli_query($conexao,'SET character_set_client=utf8');
	mysqli_query($conexao,'SET character_set_results=utf8');

	function traduz_tipo_usuario($usuarioTipo){
		switch($usuarioTipo){
			case 1:	$tipo ="COMUM"; break;
			case 2: $tipo="OPERADOR"; break;
			case 3: $tipo="ADM"; break;			
		}
		return $tipo;
	}
	
	function traduz_status_ticket ($statusTicket){
		switch($statusTicket){
			case 1:	$statusT ="ABERTO"; break;
			case 2: $statusT="EM ANÁLISE"; break;
			case 3: $statusT="EM PROGRESSO"; break;
			case 4: $statusT="NEGADO"; break;
			case 5: $statusT="CANCELADO"; break;
			case 6: $statusT="RESOLVIDO"; break;
			case 7: $statusT="REABERTO"; break;
			case 8: $statusT="FINALIZADO";break;
		}
		return $statusT;
	}

	function traduz_status_usuario($statusUsuario){
		switch($statusUsuario){
			case 0: $statusU="INATIVO"; break;
			case 1: $statusU="ATIVO"; break;	
		}
		return $statusU;
	}

	function identifica_usuario($usuarioID){
		require("conectdb.php");
		mysqli_query($conexao,"SET NAMES 'utf8'");
		mysqli_query($conexao,'SET character_set_connection=utf8');
		mysqli_query($conexao,'SET character_set_client=utf8');
		mysqli_query($conexao,'SET character_set_results=utf8');
		//require("conf.php");
		$sql="SELECT * FROM usuario WHERE usuario_id='{$usuarioID}'";
			$resultado=mysqli_query($conexao,$sql);
			if(mysqli_num_rows($resultado)>0){
				while($dados=mysqli_fetch_array($resultado)){
					$nome = $dados['nome_usuario'];
					$email = $dados['email_usuario'];
					$tipo = $dados['tipo_usuario'];
					$id = $dados['usuario_id'];	
				}
			}
		return $nome;
	}
	
	function traduz_direcionamento($direcionamento){
		switch($direcionamento){
			case 1: $direcionamentoD="SEC. DE INFRAESTRUTURA"; break;
			case 2: $direcionamentoD="SEC. DE TRANSPORTES"; break;
			case 3: $direcionamentoD="SEC. DE SEGURANÇA"; break;
			case 4: $direcionamentoD="SEC. DE SAÚDE"; break;
			case 5: $direcionamentoD="SEC. DE EDUCAÇÃO"; break;
			case 6: $direcionamentoD="SEC. DE MEIO AMBIENTE"; break;
			case 7: $direcionamentoD="SEM DIRECIONAMENTO"; break;
		}
		return($direcionamentoD);		
	}

?>