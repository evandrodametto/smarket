<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Smarket</title>
	<meta charset="utf-8">
	<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
    <script type='text/javascript' src='cep.js'></script>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
	<script src="jquery-1.11.1.min.js"></script>
	
	<script>
		$(function(){   
			var nav = $('#menuHeader');   
			$(window).scroll(function () { 
				if ($(this).scrollTop() > 150) { 
					nav.addClass("menu-fixo"); 
				} else { 
					nav.removeClass("menu-fixo"); 
				} 
			});  
		});
	</script>
</head>
<body>
	<header>
		<div id="top">
			<img src="img/logo.png" align="left" width="300">
			<li align="right"><a href="login.php"> (Login) </a> Não é cadastrado ? <a href="cadastrese.php"> Cadastre-se </li>
		</div>
		<nav id="menuHeader">
			<ul>
			<li><a href="contato.php">Contato</a></li>
			<li><a href="cadastroestabelecimento.php">Cadastre Seu Mercado</a></li>
			<li><a href="sobrenos.php">Sobre Nós</a></li>
			<li><a href="funcionamento.php">Como Funciona</a></li>
			<li><a href="index.php">Home</a></li>
				
				
				
	
			</ul>
			
		</nav>
	</header>
<h1>TELA DE ESTABELECIMENTOS!!</h1>

	
	
</body>
</html>