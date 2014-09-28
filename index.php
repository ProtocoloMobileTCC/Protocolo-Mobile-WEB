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
        <form name="f_log" id="f_log" method="post" action="valida.php">
            <label>E-mail</label><br />
            <input type="text" name="usuario" id="usuario" /><br />
            <label>Senha</label><br />
            <input type="password" name="senha" id="senha" /><br />
            <input type="submit" name="sbmlog" id="sbm_log" /><br />
        
        </form>
    
    </body>
</html>
