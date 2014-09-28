<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
    </head>
    <body>
    	 
        <div class="include">
	        <?php include_once("menu_lateral.php");?>
        </div>
        <table name="protocolos" id="protocolos" align="center" border="2px">
            <tr>
                <th>Cod. Usuário</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Tipo</th>
                <th>Criação</th>
                <th>Status</th>
                <th colspan="2">Opções</th>
            </tr>
			<?php

				require_once("conectdb.php");
				require_once("tradutores.php");
	
				mysqli_query($conexao,"SET NAMES 'utf8'");
				mysqli_query($conexao,'SET character_set_connection=utf8');
				mysqli_query($conexao,'SET character_set_client=utf8');
				mysqli_query($conexao,'SET character_set_results=utf8');

				$usuarios[] = array();
				$usuario;
				
				$sql = "SELECT * FROM usuario";
				$resultado=mysqli_query($conexao,$sql);
				$z=mysqli_num_rows($resultado);
				
				if(mysqli_num_rows($resultado)>0){
					while($usuario = mysqli_fetch_array($resultado)){
						$codUsuario = $usuario['usuario_id'];
						$cpfusuario = $usuario['cpf_usuario'];
						$nomeUsuario = $usuario['nome_usuario'];
						$emailUsuario = $usuario['email_usuario'];
						$tipoUsuario = $usuario['tipo_usuario'];
						$dataCriacao = $usuario['data_criacao'];
						$statusUsuario = $usuario['usuario_ativo'];
            ?>
     		<tr>
                <td><?=$codUsuario?></td>
                <td><?=$cpfusuario?></td>
                <td><?=$nomeUsuario?></td>
                <td><a href="mandaemailusuario"><?=$emailUsuario?></a></td>
                <td><?php echo traduz_tipo_usuario($tipoUsuario);  ?></td>
                <td><?=$dataCriacao?></td>
                <td><?php echo traduz_status_usuario($statusUsuario); ?></td>
                <td><a href="editausuario.php?cod=<?=$codUsuario?>"><input type="button" value="Editar" /></a></td> 
                <td><a onclick="javascript: return confirm('Deseja realmente excluir o usuáio <?php echo $nomeUsuario?>?')"href="excluiusuario.php?cod=<?=$codUsuario?>"><input type="button" value="Excluir" /></a></td> 
	        </tr>
		   <?php
		           }
        	    }else{
                	echo "<script>alert('Não existem usuários cadastrados'); window.location.(history.go(-1))</script>";	
            	}
           
           ?> 
    	</table>
        
	</body>
</html>