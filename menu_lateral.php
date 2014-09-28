<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Protocolo Mobile</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo-padrao.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/estilo-menu_lateral.css"/>
        <script src="JavaScript/jquery.mask.js"></script>
        <script src="JavaScript/jquery.validate.js"></script>
        <script src="JavaScript/jquery-1.11.1.js"></script>
        <script src="JavaScript/jquery-2.1.1.min.js"></script>
    </head>
    <body class="pagina_carregando pagina_carregada">
    	
        <div id="cabecalho" class="main">
            <section id="botao" class="buttonset">
                <button id="showLeftPush">
                    <img src="CSS/Imagens/3 barras.png" id="menu_icon" width="70" height="40"/>
                </button>
            </section>
            <header id="principal">
                <a href="sobre.php" alt="Conheça mais sobre o projeto">Sobre</a>
                <a href="contatos.php" alt="Contatos dos Orgão e Partições Conveniadas ao Projeto">Contatos</a>
                <a href="gerarticket.php" alt="Prencher o Formulário para Gerar o Protocolo">Gerar Protocolo</a>
                <a href="index.php" alt="Página inicial">Home</a>
                <a href="index.php" alt="Pagina Inicial">
                    <figure>
	                    <img src="CSS/Imagens/logo.png" width="80" height="70">
                    	<p>Protocolo Mobile (Em Contrução)</p>
                    </figure>
                </a>
            </header>
        </div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        	<div id="mostrar">
            	<h1 class="titulo">Menu</h1>
                <menu id="menuL">
                    <a href="index.php">Home</a>
                    <a href="login.php">Meu Perfil</a>
                    <a href="gerarticket.php">Gerar Protocolo</a>
                    <a href="buscartickets.php">Buscar Protocolo</a>
                    <a href="sair_session.php" id="btSair">Sair</a>
                </menu>
            </div>    
        </nav>
        
        <img src="CSS/Imagens/ajax-loader.gif" id="loading">
        
		<script src="JavaScript/Tela de Carregamento/jquery-latest.js"></script>
        <script>
			function loading(status) {
				if ( status == 1 )
					$('#loading').fadeIn();
				else
				$('#loading').fadeOut();
			}
			$(function() { // Quando a página estiver carregada
				loading(0); // Esconder o loading
			})
		</script>
        
		<script src="JavaScript/Menu/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};	
		</script>
	</body>
</html>