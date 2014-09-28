<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
        <?php
			$_REQUEST['cod'];	
		?>
    </head>
    <body>
    	 
        <div class="include">
	        <?php include_once("menu_lateral.php");?>
        </div>
        <form name="status" id="status" action="mudandostatus.php" method="post">    
            <input type="radio" name="rd_status" id="rd_status" value="2" checked="checked"/>EM ANÁLISE<br/>
            <input type="radio" name="rd_status" id="rd_status" value="3" />EM PROGRESSO<br/>
            <input type="radio" name="rd_status" id="rd_status" value="6" />RESOLVIDO<br/>
            <input type="radio" name="rd_status" id="rd_status" value="8" />FINALIZADO<br/><br />
            <label>Justicativa para mudança de status</label><br />
            <textarea name="status_justificativa" id="status_justificativa" rows="7" cols="50"></textarea><br />
            <input type="submit" name="sbm_status" id="sbm_status" value="Submeter" />
            <input type="hidden" name="cod" id="cod" value="<?=$_REQUEST['cod']?>" />
            <a href="buscartickets.php"><input type="button" name="bck_statu" id="bck_status" value="Voltar" /></a>
         </form>
         
	</body>
</html>