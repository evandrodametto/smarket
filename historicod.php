<?php
  session_start();
  $codi=$_SESSION["id"];
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
		<link rel="stylesheet" type="text/css" href="css/menu.css">
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
			<li align="right">Seja Bem Vindo, <?php echo $_SESSION["nome"]; ?>,( <a href="sair.php">Desconectar</a> )</li>
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
	<nav>
  <ul class="menu">
  
		<li><a href="painel.php">HOME PAINEL</a></li>
		<li><a href="#">HISTORICO DE COMPRAS</a>
	         	<ul>
	                  <li><a href="historicod.php">DINHEIRO</a></li>
	                  <li><a href="historicoc.php">CARTAO</a></li>
	              
	       		</ul>
			</li>
		<li><a href="painelandamento.php">ANDAMENTO DE PEDIDO</a></li>      
		<li><a href="painelinformacoes.php">INFORMACOES DE CADASTRO </a></li>		
</ul>
</nav>
<br><br><br><br>
<center><h1>HISTÓRICO DE COMPRAS - DINHEIRO</h1></center>
<?php
//$sql = "SELECT * FROM tabela ORDER BY data,nome DESC" 
include("config/conexao.php");
      $txt = "select * from pagd where id_usuario = $codi";

	  $sql = mysql_query($txt);

	?>
	
	<?php { ?>
</br></br></br>

	<hr color="#FFFF00">
	
	
	<table width="100%" border="1" align="center">
	<tr bgcolor="#FFFF00" align="center">
	<td>ID PEDIDO</td>
	<td>ID MERCADO</td>
	<td>TOTAL</td>

	</tr>
	
		<?php while(@$dados = mysql_fetch_array($sql)) {?>
		<tr align="center">
		<td> <?php echo $dados['id']; ?></td>
		<td> <?php echo $dados['id_mercado']; ?> </td>
		<td> <?php echo $dados['total']; ?></td>
		</tr>
		<?php }?>

	

		
	
	</table>
<?php } ?>

<?    
   if (isset($_POST['enviar'])){
      $url = 'index.php';
      header("Location: $url");
   }
?>

	
	
</body>
</html>