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
<?php { ?>
<form action="cadcliente.php" method="post">
<table ALIGN="center">
<tr> 
<td> NOME COMPLETO  : </td>
<td><input type="text" name="nome"></td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td><td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> Login Facebook  </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> &nbsp;&nbsp;&nbsp; </td>
<td> Login Com E-mail  </td>
</tr>

<tr> 
<td> E-MAIL  : </td>
<td><input type="text" name="email"></td>
</tr>
<td> CPF : </td>
<td><input type="text" name="cpf"></td>
</tr>
<td> CEP : </td>
<td><input type="text" name="cep"></td>
</tr>
<td> ENDEREÇO   :</td>
<td><input type="text" name="ende"></td>
</tr>
<tr> 
<td> BAIRRO   : </td>
<td><input type="text" name="bairro"></td>
</tr>
<td> NUMERO   : </td>
<td><input type="text" name="numero"></td>
</tr>
<tr> 
<td> TELEFONE DE CONTATO  : </td>
<td><input type="text"  name="telefone" maxlength="12" OnKeyPress="formatar('## ####-####', this)"> </td>
</tr>
<tr> 
<td> <HR> </td>
<td> <HR> </td>
</tr>
<tr>
<td>DIGITE SEU LOGIN :</td>
<td> <input type="text" name="login" placeholder="Digite seu login" > </td>
		 
</tr>
<tr>
<td> DIGITE SUA SENHA:</td>
<td><input type="password" name="senha" placeholder="Digite sua senha"></td>
</tr>
<td><a href="index.php"><img src="img/voltar.png" ></a><input type="image" class="botao" src="img\cadastrar.png">  </td>
<td>
</tr>
<tr> 
<td>  </td>
</tr>


</table>


</form>
<?php } ?>
</body>
</html>