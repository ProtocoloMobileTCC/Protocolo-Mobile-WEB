<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
		<?php
			
			 echo $_GET['cod'];
			 $cod=$_GET['cod'];
			 
		?>
	</head>
	<body>
    
    	<div class="include">
			<?php include_once("menu_lateral.php");?>
        </div>
        <form name="f_gera_ticket" id="f_gera_ticket" method="post" action="confirmaticket.php">
            <label for="txt_titulo">Titulo: </label>
            <input type="text" name="txt_titulo" id="txt_titulo" />
            <label for="txt_local">Localização: </label>
            <input type="text" name="txt_local" id="txt_local" /><br/>
            <label for="txt_descricao">Descrição: </label><br/>
            <textarea name="txt_descricao" id="txt_descricao">Descreva o problema aqui</textarea><br/><br />
            <label for="browse_ft">Anexe uma Foto: </label><br/>
            <input type="file" name="browse_ft" id="browse_ft" /><br/>
            <br/>
            <input type="submit" name="sbm_gera_ticket" id="sbm_gera_ticket" value="Gerar Ticket" />
            <input type="hidden" name="cod" id="cod" value="<?=$cod?>" />
        </form>
        
	</body>
</html>