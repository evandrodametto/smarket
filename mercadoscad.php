<?php
  session_start();
  include("config/conexao.php");
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
				<td><img src="img/logo.png" align="left" width="300"></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>Seja Bem Vindo, <?php echo $_SESSION["nome"]; ?>,( <a href="sair.php">Desconectar</a> )</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		</table>
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
	</header><br><br>
	<center><h2>Escolha o Grupo de Supermercados de sua Preferência!</h2></center>
<?php

include("config/conexao.php");
 $txt = "select * from grupo order by id"; 
   $sql = mysql_query($txt);

   
   
   while($d = mysql_fetch_object($sql)) { 


 ?>

 <div id="box">

 <?php 
	     echo substr($d->descricao,0,50);
	  ?>
      
	  <br>
	  
      </a>
      <BR /><BR />
 <a href="grupo.php?id=<?php echo $d->id;?>">Selecionar</a> </div>
 <?php } ?>
 
 
</body>
</html>