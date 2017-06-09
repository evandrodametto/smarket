<html>
  <head>
<title>Smarket Login </title>
<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="css/home.css">
	 <script src="jquery-1.11.1.min.js"></script>
		<style>
 
	body { text-align: center; }
	#site { width: 700px; }
	#topo { width: 700px; height: 100px; }
	#col1 { width: 450px; float: left; height: 300px; text-align: left; }
	#col2 { width: 700px; float: left; height: 300px; text-align: left; }
	#col3 { width: 150px; float: left; height: 300px; }
</style>
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
	<script type="text/javascript" src="jquery.js"></script> 
<script type="text/javascript"> 
jQuery.fn.toggleText = function(a,b) {
return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
}

$(document).ready(function(){
	$('.tgl').before('<span> <img src="img/cad_2.png" Width-"50" Height="50">  </span>');
	$('.tgl').css('display', 'none')
	$('span', '#box-toggle').click(function() {
		$(this).next().slideToggle('slow')
		.siblings('.tgl:visible').slideToggle('fast');
	
		$(this).toggleText('Revelar','Esconder')
		.siblings('span').next('.tgl:visible').prev()
		.toggleText('Revelar','Esconder')
	});
})
</script>
</script><style type="text/css" media="all">

</style>
  </head>
  <body>
    <header>
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
			<div id="box-toggle">
<div class="tgl">
<form action="cadcliente.php" method="post">
<div id="col2">
<p> NOME COMPLETO  : <input type="text" name="nome">
<p> E-MAIL  :
<input type="text" name="email">
 <p>CPF : <input type="text" name="cpf">

<p> CEP : <input type="text" name="cep">

<p> ENDEREÇO   :
<input type="text" name="ende">

 
<p> BAIRRO   : 
<input type="text" name="bairro">

<p> NUMERO   : 
<input type="text" name="numero">

 
<p> TELEFONE DE CONTATO  : 
<input type="text"  name="telefone" maxlength="12" OnKeyPress="formatar('## ####-####', this)"> 
<p>DIGITE SEU LOGIN :
 <input type="text" name="login" placeholder="Digite seu login" > 
		 


<p> DIGITE SUA SENHA:
<input type="password" name="senha" placeholder="Digite sua senha"><p>

</a><input type="image" class="botao" src="img\cad.png">  
</form>
</div>
</div>
</div>