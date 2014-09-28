<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
    </head>
   	<?php $_REQUEST['cod']; ?>
	<body>
    
        <div class="include">
            <?php include_once("menu_lateral.php");?>
        </div>    
        <form name="cancel" id="cancel" action="cancelando.php" method="post">
            <label>Justicativa de Cancelamento:</label><br />
            <textarea name="cancel_justificativa" id="cancel_justificativa" rows="7" cols="50"></textarea><br />
            <input type="submit" name="sbm_status" id="sbm_status" value="Submeter" />
            <input type="hidden" name="cod" id="cod" value="<?=$_REQUEST['cod']?>" />
            <a href="buscartickets.php"><input type="button" name="bck_cancel" id="bck_cancel" value="Voltar" /></a>
         </form>
	</body>
</html>