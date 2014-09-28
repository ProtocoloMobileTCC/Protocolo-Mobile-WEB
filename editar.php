<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
		<?php
        
		require_once("conectdb.php");
        require_once("tradutores.php");
        if(isset($_REQUEST) and $_REQUEST!=""){
        	$tkt = $_REQUEST["cod"];
        }
        
		mysqli_query($conexao,"SET NAMES 'utf8'");
        mysqli_query($conexao,'SET character_set_connection=utf8');
        mysqli_query($conexao,'SET character_set_client=utf8');
        mysqli_query($conexao,'SET character_set_results=utf8');
        
		$query = "select * from protocolo where protocolo_id=$tkt";
        $resultado = mysqli_query($conexao,$query);
        if(mysqli_num_rows($resultado)>0){
        	while($protocolo = mysqli_fetch_array($resultado)){
			$codProtocolo = $protocolo['protocolo_id'];
			$tituloProtocolo = $protocolo['titulo'];
			$descricaoProtocolo = $protocolo['descricao'];
			$obsProtocolo = $protocolo['obs'];
			$localizacaoProtocolo = $protocolo['localizacao'];
			$usuarioProtocolo = $protocolo['usuario_id'];
			$statusProtocolo = $protocolo['status_id'];
			}
        }
        ?>
    </head>
	<body>
    
        <h3>Editar Ticket nº <span style="color:#F00"><?= $tkt?></span></h3>
        <h4>Status: <span style="color:#F00"><?= traduz_status_ticket($statusProtocolo) ?> </span></h4>
        <form name="f_direciona_ticket" id="f_direciona_ticket" method="post" action="direcionatkt.php">
            <label for="txt_titulo">Titulo:</label>
            	<input type="text" name="txt_titulo" id="txt_titulo" value="<?=$tituloProtocolo?>" />
            <label for="txt_local">Localização: </label>
            	<input type="text" name="txt_local" id="txt_local" value="<?=$localizacaoProtocolo?>"/>
            <label for="sel_direcionamento">Direcionamento: </label>
            <select name="sel_direcionamento" id="sel_direcionamento">
                <option value="" selected="selected">--</option>
                <option value"sec_transp">Secretaria de Transportes</option>
                <option value"sec_infra"> Secretaria de Infraestrutura</option>
                <option value="sec_saude">Secretaria de Saúde</option>
                <option value="sec_seg">Secretaria de Segurança</option>      
            </select>
            <br/><br />
            <label for="txt_descricao">Descrição: </label><br/>
                <textarea rows="7" cols="75" name="txt_descricao" id="txt_descricao"><?=$descricaoProtocolo?></textarea>
                <textarea rows="7" cols="10" name="foto_area" id="foto_area">Foto aqui </textarea>
            <br/><br /><br />
            <label for="txt_obs">Observações para direcionamento:</label><br />
            <textarea rows="7" cols="75" name="txt_obs" id="txt_obs"> </textarea>
            <br/>
            <input type="hidden" name="codProtocolo" id="codProtocolo" value="<?=$codProtocolo?>" />
            <input type="hidden" name="usuarioProtocolo" id="usuarioProtocolo" value="<?=$usuarioProtocolo?>" />
            <input type="submit" name="sbm_direciona_ticket" id="sbm_direciona_ticket" value="Direcionar Ticket" />
        </form>
	</body>
</html>