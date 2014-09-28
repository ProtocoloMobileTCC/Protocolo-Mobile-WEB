<?php
header('Content-type: text/html; charset=utf-8');
require_once("tradutores.php");
if(isset($_POST)){
	if($_POST['txt_titulo']=="" || $_POST['txt_local']=="" || $_POST['sel_direcionamento']=="" || $_POST['txt_descricao']=="" || $_POST['txt_obs']==""){
		echo "<script>alert('Preencha todos os campos 951742 !!!'); window.history.go(-1)</script>";	
	}else{
		$direcionamento = $_POST['sel_direcionamento'];
		$obs = $_POST['txt_obs'];
		$descricao = $_POST['txt_descricao'];
		$codProtocolo = $_POST['codProtocolo'];
		$direcionamentoD = traduz_direcionamento($direcionamento);
		
		require_once('conectdb.php');
		
		$sql1 = "UPDATE protocolo set obs='{$obs}', status_id=2, direcionamento_id='{$direcionamento}' WHERE protocolo_id='{$codProtocolo}'";
		$resultado1 = mysqli_query($conexao,$sql1);
		$sql2 = "INSERT into observacoes(descricao_obs,direcionamento,protocolo_id) VALUES('$obs','$direcionamentoD','$codProtocolo')";
		mysqli_query($conexao,$sql2);
		if(mysqli_affected_rows($conexao)>0){
		echo "<script>alert('Direcionamento para $direcionamentoD realizado com sucesso!!'); window.location.href='buscartickets.php'</script>";	
		}else{
			echo $direcionamentoD;	
		}

	}
}
		



?>