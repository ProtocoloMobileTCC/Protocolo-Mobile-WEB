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
                <th>Protocolo</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Observações</th>
                <th>Localização</th>
                <th>Usuario</th>
                <th>Status</th>
                <th>Direcionamento</th>
                <th colspan="2">Opções</th>
            </tr>
			<?php
			
				require_once("conectdb.php");
				require_once("tradutores.php");
				
				mysqli_query($conexao,"SET NAMES 'utf8'");
				mysqli_query($conexao,'SET character_set_connection=utf8');
				mysqli_query($conexao,'SET character_set_client=utf8');
				mysqli_query($conexao,'SET character_set_results=utf8');
				
				//$nome =$_GET['nome'];
				$protocolos[] = array();
				$sql = "SELECT * FROM protocolo order by status_id, protocolo_id";
				$resultado=mysqli_query($conexao,$sql);
				
				if(mysqli_num_rows($resultado)>0){
					while($protocolo = mysqli_fetch_array($resultado)){
						$codProtocolo = $protocolo['protocolo_id'];
						$tituloProtocolo = $protocolo['titulo'];
						$descricaoProtocolo = $protocolo['descricao'];
						$obsProtocolo = $protocolo['obs'];
						$localizacaoProtocolo = $protocolo['localizacao'];
						$usuarioProtocolo = $protocolo['usuario_id'];
						$statusProtocolo = $protocolo['status_id'];
						$direcionamento = $protocolo['direcionamento_id'];
            	
				?>
                <tr>
                    <td><?= $codProtocolo ?></td>
                    <td><?= $tituloProtocolo?></td>
                    <td><?=$descricaoProtocolo ?></td>
                    <td align="center"><?=$obsProtocolo ?><br/><a href="verobs.php?cod=<?=$codProtocolo?>">
                        <input type="button" id="ver+" nome="ver+" value="  ver+  " /></a>
                    </td>
                    <td><?=$localizacaoProtocolo  ?></td>
                    <td><?=identifica_usuario($usuarioProtocolo) ?></td>
                    <td><?= traduz_status_ticket($statusProtocolo) ?></td>
                    <td><?= traduz_direcionamento($direcionamento) ?></td>
                    <td align="center">
                        <form name="select"  method="post" action="verificaselect.php?cod=<?=$codProtocolo?>">
                            <select id="select" name="select">
                                <option value="" selected="selected"> -- </option>
                                <option value="1">Direcionar</option>
                                <option value="2">Cancelar</option>
                                <option value="3">Negar</option>
                                <option value="7">Status</option>
                            </select>
                            <input type="submit" name="sbm_select" id="sbm_select" value="atuar"/>                    
                        </form>
                    </td>
                </tr>
	        <?php
			
    	    	}
        	}else{
        		echo "<script>alert('Não existem protocolos registrados'); window.location.(history.go(-1))</script>";	
        	}
        	?>    
        </table>
    
    </body>
</html>