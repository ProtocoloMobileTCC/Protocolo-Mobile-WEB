<?php
	
	if(isset($_POST["select"])){
		$select=$_POST["select"];
		$ticket=$_GET['cod'];
		if($select==""){
			echo "<script>alert('Nenhuma ação selecionada'); window.location.href='buscartickets.php';</script>";		
		}else{
			switch($select){
				case 1:
					echo "<script>window.location.href='direcionamento.php?cod=$ticket';</script>";
				break;
				case 2:
					echo "<script>window.location.href='cancelamento.php?cod=$ticket';</script>";
				break;
				case 3:
					echo "<script>window.location.href='negar.php?cod=$ticket';</script>";
				break;
				case 4:
					echo "<script>window.location.href='cobrar.php?cod=$ticket';</script>";
				break;
				case 5:
					echo "<script>window.location.href='reabrir.php?cod=$ticket';</script>";
				break;
				case 6:
					echo "<script>window.location.href='solicitacancelamento.php?cod=$ticket';</script>";
				break;
				case 7:
					echo "<script>window.location.href='mudastatus.php?cod=$ticket';</script>";
				break;
				default:
					echo "<script>alert('Nenhuma ação selecionada'); window.location.href='buscartickets.php?cod=$ticket';</script>";
				break;
			}
		}
	}

?>