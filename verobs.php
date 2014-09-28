<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
    	<?php
		
			session_start();
			header('Content-type: text/html; charset=utf-8');
			require_once('conectdb.php');
			$cod=$_REQUEST['cod'];
		
		?>
    </head>
    <body>
    	 
        <div class="include">
	        <?php include_once("menu_lateral.php");?>
        </div>
    	<?php
			
			mysqli_query($conexao,"SET NAMES 'utf8'");
			mysqli_query($conexao,'SET character_set_connection=utf8');
			mysqli_query($conexao,'SET character_set_client=utf8');
			mysqli_query($conexao,'SET character_set_results=utf8');
		
			$sql = "SELECT * FROM observacoes WHERE protocolo_id='{$cod}'";
			$resultado = mysqli_query($conexao,$sql);
			$i=0;
			if(mysqli_num_rows($resultado)>0){
		?>
        <h3> Observações do Protocolo nº <?=$cod?> </h3>
        <table name="observacoes" id="observacoes" align="center" border="2px">
            <tr>
                <th>Data / Hora</th>
                <th>Observações</th>
                <th>Direcionamento</th>
            </tr>
			<?php

				while($observacao = mysqli_fetch_array($resultado)){
				$i++;
				$descricao_obs = $observacao['descricao_obs'];
				$protocolo_id = $observacao['protocolo_id'];
				$direcionamento = $observacao['direcionamento'];
				$dataHora = $observacao['criacao_obs'];			

			?>
			<tr>
                <td><?=$dataHora?></td>
                <td><?=$descricao_obs?></td>
                <td><?=$direcionamento?></td>			
			</tr>
			<?php
			
					}
				}else{
					echo "<script>alert('Não existem observações para o Procotolo Nº $cod.');window.history.go(-1)</script>";	
				}
			?>
		</table>
	
    </body>
</html>