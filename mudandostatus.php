<?php
	if(isset($_POST)){
		if($_POST['rd_status']=="" or $_POST['status_justificativa']==""){
			echo "<script>alert('Preencha todos os campos'); window.location.href='buscartickets.php';</script>";	
		}else{
			require_once('conectdb.php');
			require_once("tradutores.php");
			//require_once('session.php');
			$status = $_POST['rd_status'];
			$justificativa = $_POST['status_justificativa'];
			$protocolo_id = $_POST['cod'];
			$obs = $justificativa;
			$statusD = traduz_status_ticket($status);
			
			
			
			$sql1 = "UPDATE protocolo set status_id='{$status}', obs='{$justificativa}' where protocolo_id='{$protocolo_id}'";
			$sql2 = "INSERT into observacoes(descricao_obs,direcionamento,protocolo_id) VALUES('$justificativa','--','$protocolo_id')";
			$resultado1=mysqli_query($conexao,$sql1);
			$resultado=mysqli_query($conexao,$sql2);
			if(mysqli_affected_rows($conexao)>0){
				echo"<script>alert('Status atualizado para $statusD com sucesso!'); window.location.href='buscartickets.php'</script>";
			}
		}
		
	}else{
		echo "VAZIO22222";	
	}

?>