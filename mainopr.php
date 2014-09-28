<!doctype>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="Design/estilo-padrao.css"/>
    <?php 
		$nome=$_GET['nome'];
 	?>
    </head>
    <body>
    	 
        <div class="include">
	        <?php include_once("menu_lateral.php");?>
        </div>
        <h1> MAIN OPERADOR </h1><br />    
        <a href="buscartickets.php?cod=<?=$nome?>"> Buscar Tickets</a><br/>
        <a href="gerarticket.php?cod=<?=$nome?>">Gerar Ticket</a><br/>    

	</body>
</html>