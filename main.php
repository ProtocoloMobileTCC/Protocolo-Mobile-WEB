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
        <h1>MAIN USUARIO COMUM</h1>
        <br/>
        <h3 align="center">Meus Tickets</h3>
        
        <table name="protocolos" id="protocolos" align="center" border="2px">
        	<tr>
                <th>Protocolo</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Localização</th>
                <th>Observações</th>
                <th>Status</th>
                <th colspan="2">Opções</th>
            </tr>
				<?php
    
                    require_once("conectdb.php");
                    require_once("tradutores.php");
                    
                    $nome=$_GET['nome'];
                    
                    mysqli_query($conexao,"SET NAMES 'utf8'");
                    mysqli_query($conexao,'SET character_set_connection=utf8');
                    mysqli_query($conexao,'SET character_set_client=utf8');
                    mysqli_query($conexao,'SET character_set_results=utf8');
                    
                    $protocolos[] = array();
                    
                    $sql = "SELECT * FROM protocolo where usuario_id='{$_GET['nome']}'";
                    $resultado=mysqli_query($conexao,$sql);
                    
                    if(mysqli_num_rows($resultado)>0){
                        while($protocolo = mysqli_fetch_array($resultado)){
                            $codProtocolo = $protocolo['protocolo_id'];
                            $tituloProtocolo = $protocolo['titulo'];
                            $descricaoProtocolo = $protocolo['descricao'];
                            $localizacaoProtocolo = $protocolo['localizacao'];
                            $obsProtocolo = $protocolo['obs'];
                            $usuarioProtocolo = $protocolo['usuario_id'];
                            $statusProtocolo = $protocolo['status_id'];
    
                ?>                        
            <tr>
                <td><?= $codProtocolo?></td>
                <td><?= $tituloProtocolo?></td>
                <td><?=$descricaoProtocolo?></td>
                <td><?=$localizacaoProtocolo?></td>
                <td><?=$obsProtocolo?></td>
                <td><?= traduz_status_ticket($statusProtocolo) ?></td>
                <td>
                    <form name="select" id="select" method="post" action="verificaselect.php?cod=<?=$codProtocolo?>">
                        <select name="select" id="select">
                            <option value="">--</option>
                            <option value="4">Cobrar</option>
                            <option value="5">Reabrir</option>
                            <option value="6">Cancelar</option>
                        </select>
	                    <input type="submit" name="sbm_select" id="sbm_select" value="OK" />
                    </form>
                </td>
            </tr>
			<?php
					}
				}else{
					echo "<script>alert('Não existem protocolos registrados em seu login'); window.location.(history.go(-1))</script>";
				}
			?>    
        </table>
        <br/>
        <label><a href="gerarticket.php?cod=<?=$nome?>">Gerar Ticket</a></label><br/>
        <label><a href="meuperfil.php">Meu Perfil</a></label>

	</body>
</html>